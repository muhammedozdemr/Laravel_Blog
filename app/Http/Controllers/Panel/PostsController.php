<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function index()
    {
        $title = 'Yazılar';
        $posts = Post::leftJoin('category_post','posts.id','=','category_post.post_id')
            ->leftJoin('categories','categories.id','=','category_post.category_id')
            ->select('posts.id','posts.title','posts.slug','posts.text','categories.name')
            ->paginate(10);
        $counter = 1;
        return view('panel/posts/posts', ['title' => $title, 'posts' => $posts, 'counter' => $counter]);
    }

    public function create_get()
    {
        $title = 'Yazılar';
        $categories = Category::orderBy('name','asc')->get();
        return view('panel/posts/postsManage',['categories' => $categories, 'title' => $title]);
    }

    public function create_post(Request $request)
    {
        $redirect = redirect()->route('panel.posts.posts');
        $data = $request->except('_token');

        try {
            $post = new Post();
            $post->title = $data['title'];
            $post->slug = Str::slug(request('title'));
            request()->merge(['slug'=>$data['slug']]);
            $post->text = $data['text'];
            $post->save();
            $post_id = $post->id;

            $category_post=DB::table('category_post')->insert([
                'category_id' => $data['category_id'],
                'post_id' => $post_id,
            ]);
            $redirect->with('success', __('messages.message_create_success'));

        } catch (Exception $e) {
            $redirect->with('error', $e->getMessage());
        }

        return $redirect;
    }

    public function update_get($id)
    {
        $title = 'Yazılar';
        $categories = Category::orderBy('name','asc')->get();

        try {
            $post = Post::leftJoin('category_post','posts.id','=','category_post.post_id')
                ->leftJoin('categories','categories.id','=','category_post.category_id')
                ->select('posts.id','posts.title','posts.slug','posts.text','categories.name','category_post.category_id')
                ->find($id);
            if ($post) {
                return view('panel/posts/postsManage', ['post' => $post, 'title' => $title, 'categories' => $categories]);
            } else {
                return redirect()->route('panel.posts.posts')->with('error', __('messages.not_found_resource'));
            }
        } catch (Exception $e) {
            return redirect()->route('panel.posts.posts')->with('error', $e->getMessage());
        }
    }

    public function update_post(Request $request, $id)
    {
        $redirect = redirect()->route('panel.posts.posts');
        $request->except('_token');
        try {
            $data = request()->only('title','slug','text','category_id');
            if(request()->filled('slug')) {
                $data['slug'] = Str::slug(request('title'));
                request()->merge(['slug'=>$data['slug']]);
            }
            $this->validate(request(),[
                'title'=>'required',
                'slug'=>(request('original_slug')!=request('slug') ? 'unique:posts,slug' : '')//post tablosundaki slug değerini kontrol eder
            ]);

            $posts=Post::where('id',$id)->firstOrFail();
            $posts->update($data);

            DB::table('category_post')->where('post_id',$id)->update([
                'category_id' => $data['category_id']
            ]);

            $redirect->with('success', __('messages.message_create_success'));

        } catch (Exception $e) {
            $redirect->with('error', $e->getMessage());
        }

        return $redirect;
    }

    public function delete($id) {
        try {
            return Post::destroy($id);
        } catch (Exception $e) {
            return response(['message' => $e->getMessage()], 404);
        }
    }
}
