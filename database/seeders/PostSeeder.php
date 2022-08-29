<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 15; $i++) {
            $post_title = $faker->streetName;
            Post::create([
                'title' => $post_title,
                'slug'     => Str::slug($post_title),
                'text' => $faker->paragraph(20)
            ]);
        }

        DB::table('category_post')->truncate();
        $categories = Category::all();
        foreach ($categories as $category) {
            $posts = Post::pluck('id')->random(10)->all();
            $category->posts()->attach($posts);
        }
    }
}
