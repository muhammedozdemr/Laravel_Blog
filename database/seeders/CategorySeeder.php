<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $id = Category::insertGetId(['name'=>'Elektronik', 'slug'=>'elektronik']);
        Category::firstOrCreate(['name'=>'Bilgisayar/Tablet', 'slug'=>'bilgisayar-tablet', 'top_id'=>$id]);
        Category::firstOrCreate(['name' => 'Telefon', 'slug' => 'telefon', 'top_id'=> $id]);
        Category::firstOrCreate(['name' => 'TV ve Ses Sistemleri', 'slug' => 'tv-ses-sistemleri', 'top_id'=> $id]);
        Category::firstOrCreate(['name' => 'Kamera', 'slug' => 'kamera', 'top_id'=> $id]);

        $id = Category::insertGetId(['name' => 'Kitap', 'slug' => 'kitap']);
        Category::firstOrCreate(['name' => 'Edebiyat', 'slug' => 'edebiyat', 'top_id' => $id]);
        Category::firstOrCreate(['name' => 'Çocuk', 'slug' => 'cocuk', 'top_id' => $id]);
        Category::firstOrCreate(['name' => 'Bilgisayar', 'slug' => 'bilgisayar', 'top_id' => $id]);
        Category::firstOrCreate(['name' => 'Sınavlara Hazırlık', 'slug' => 'sinavlara-hazirlik', 'top_id' => $id]);

        Category::firstOrCreate(['name' => 'Dergi', 'slug' => 'dergi']);
        Category::firstOrCreate(['name' => 'Mobilya', 'slug' => 'mobilya']);
        Category::firstOrCreate(['name' => 'Dekorasyon', 'slug' => 'dekorasyon']);
        Category::firstOrCreate(['name' => 'Kozmetik', 'slug' => 'kozmetik']);
        Category::firstOrCreate(['name' => 'Kişisel Bakım', 'slug' => 'kisisel-bakim']);
        Category::firstOrCreate(['name' => 'Giyim ve Moda', 'slug' => 'giyim-moda']);
        Category::firstOrCreate(['name' => 'Anne ve Çocuk', 'slug' => 'anne-cocuk']);
    }
}
