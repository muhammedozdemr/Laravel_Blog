<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\CategoriesController;
use App\Http\Controllers\Web\PostsController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{slug}', [CategoriesController::class, 'index'])->name('category');
Route::get('/post/{slug}', [PostsController::class, 'index'])->name('post');
