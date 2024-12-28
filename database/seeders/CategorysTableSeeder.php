<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Shoes', 'slug' => 'shoes', 'image_path' => 'Hybrid Shoes – Jones Bootmaker.png' , 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Electronics','image_path' =>  'categories/electronics Global Trading AB.png', 'slug' => 'bags&backpacks', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Accessories','image_path' =>  'categories/accessories of 2017 - The Statesman.png', 'slug' => 'hoodies&sweatshirts', 'created_at' => $now, 'updated_at' => $now],
            // ['name' => 'T-shirts', 'slug' => 't-shirts', 'created_at' => $now, 'updated_at' => $now],
            // ['name' => 'Shirts', 'slug' => 'shirts', 'created_at' => $now, 'updated_at' => $now],
            // ['name' => 'Pants', 'slug' => 'pants', 'created_at' => $now, 'updated_at' => $now],
            // ['name' => 'Shorts', 'slug' => 'shorts', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
