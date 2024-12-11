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
            ['name' => 'Shoes', 'slug' => 'shoes', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bags & Backpacks', 'slug' => 'bags&backpacks', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hoodies & Sweatshirts', 'slug' => 'hoodies&sweatshirts', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'T-shirts', 'slug' => 't-shirts', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shirts', 'slug' => 'shirts', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pants', 'slug' => 'pants', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Shorts', 'slug' => 'shorts', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
