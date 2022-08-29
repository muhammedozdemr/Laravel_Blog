<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        $categories=Category::where('top_id',0)->get();
        return view('web.post', [
            'post' => $post,
            'categories' => $categories
        ]);

    }
}
