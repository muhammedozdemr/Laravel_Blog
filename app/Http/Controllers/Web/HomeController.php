<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::leftJoin('category_post','posts.id','=','category_post.post_id')
            ->leftJoin('categories','categories.id','=','category_post.category_id')
            ->where('categories.top_id',0)
            ->select('posts.id','posts.title','posts.slug','posts.text','categories.name','posts.created_at')
            ->paginate(12);
        $categories=Category::where('top_id',0)->get();
        return view('web.home',['posts' => $posts,'categories' => $categories]);
    }
}
