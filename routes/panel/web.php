<?php

use App\Http\Controllers\Panel\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\HomeController;
use App\Http\Controllers\Panel\RolesController;
use App\Http\Controllers\Panel\CategoriesController;
use App\Http\Controllers\Panel\PostsController;

Auth::routes();
Route::prefix('panel')->name('panel.')->group(function () {

    //Home
    Route::get('/', [HomeController::class, 'index'])->name('home');

    //Users
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UsersController::class, 'index'])->middleware('permission:Tüm izinler|Kullanıcı Listele')->name('users');
        Route::get('/create', [UsersController::class, 'create_get'])->middleware('permission:Tüm izinler|Kullanıcı Ekle')->name('create');
        Route::post('/create', [UsersController::class, 'create_post']);
        Route::get('/update/{id}', [UsersController::class, 'update_get'])->middleware('permission:Tüm izinler|Kullanıcı Düzenle')->name('update')->whereNumber('id');
        Route::post('/update/{id}', [UsersController::class, 'update_post'])->whereNumber('id');
        Route::post('/delete/{id}', [UsersController::class, 'delete'])->middleware('permission:Tüm izinler|Kullanıcı Sil')->name('delete')->whereNumber('id');
    });

    //Roles
    Route::prefix('roles')->name('roles.')->group(function () {
        Route::get('/', [RolesController::class, 'index'])->middleware('permission:Tüm izinler|Rolleri Listele')->name('roles');
        Route::get('/create', [RolesController::class, 'create_get'])->middleware('permission:Tüm izinler|Rol Ekle')->name('create');
        Route::post('/create', [RolesController::class, 'create_post']);
        Route::get('/update/{id}', [RolesController::class, 'update_get'])->middleware('permission:Tüm izinler|Rol Düzenle')->name('update')->whereNumber('id');
        Route::post('/update/{id}', [RolesController::class, 'update_post'])->whereNumber('id');
        Route::post('/delete/{id}', [RolesController::class, 'delete'])->middleware('permission:Tüm izinler|Rol Sil')->name('delete')->whereNumber('id');
    });

    //Categories
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('/', [CategoriesController::class, 'index'])->middleware('permission:Tüm izinler|Kategorileri Listele')->name('categories');
        Route::get('/create', [CategoriesController::class, 'create_get'])->middleware('permission:Tüm izinler|Kategori Ekle')->name('create');
        Route::post('/create', [CategoriesController::class, 'create_post']);
        Route::get('/update/{id}', [CategoriesController::class, 'update_get'])->middleware('permission:Tüm izinler|Kategori Düzenle')->name('update')->whereNumber('id');
        Route::post('/update/{id}', [CategoriesController::class, 'update_post'])->whereNumber('id');
        Route::post('/delete/{id}', [CategoriesController::class, 'delete'])->middleware('permission:Tüm izinler|Kategori Sil')->name('delete')->whereNumber('id');
    });

    //Categories
    Route::prefix('posts')->name('posts.')->group(function () {
        Route::get('/', [PostsController::class, 'index'])->middleware('permission:Tüm izinler|Yazıları Listele')->name('posts');
        Route::get('/create', [PostsController::class, 'create_get'])->middleware('permission:Tüm izinler|Yazı Ekle')->name('create');
        Route::post('/create', [PostsController::class, 'create_post']);
        Route::get('/update/{id}', [PostsController::class, 'update_get'])->middleware('permission:Tüm izinler|Yazıyı Düzenle')->name('update')->whereNumber('id');
        Route::post('/update/{id}', [PostsController::class, 'update_post'])->whereNumber('id');
        Route::post('/delete/{id}', [PostsController::class, 'delete'])->middleware('permission:Tüm izinler|Yazı Sil')->name('delete')->whereNumber('id');
    });
});

Auth::routes(['register' => false]);

