<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $total_user = User::count();
        $total_role = Role::count();
        $total_category = Category::count();
        $total_post = Post::count();
        return view('panel.home',[
            'total_user' => $total_user,
            'total_role' => $total_role,
            'total_category' => $total_category,
            'total_post' => $total_post
        ]);
    }
}
