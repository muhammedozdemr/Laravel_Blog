<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class CategoriesController extends Controller
{
    public function index($slug)
    {
        $posts = Post::leftJoin('category_post','posts.id','=','category_post.post_id')
            ->leftJoin('categories','categories.id','=','category_post.category_id')
            ->where('categories.slug',$slug)
            ->select('posts.id','posts.title','posts.slug','posts.text','categories.name','posts.created_at')
            ->paginate(4);
        $category = Category::where('slug', $slug)->firstOrFail();
        $sub_category = Category::where('top_id', $category->id)->get();
        $categories=Category::where('top_id',0)->get();
        return view('web.category', [
            'posts' => $posts,
            'category' => $category,
            'sub_category' => $sub_category,
            'categories' => $categories
        ]);

    }
}
