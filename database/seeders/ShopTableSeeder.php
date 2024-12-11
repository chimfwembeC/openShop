<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shop;


class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert shop data
        Shop::create([
            'name' => "Adidas Lusaka",
            // 'slug' => 'adidas-lusaka',
            // 'description' => 'Adidas Store in Lusaka, Zambia.',
            'location' => "Lusaka, Zambia",
            'status' => "active", // Correct enum value
            // 'is_open' => true, // Shop is open
        ]);

        Shop::create([
            'name' => "Nike Lusaka",
            // 'slug' => 'nike-lusaka',
            // 'description' => 'Nike Store in Lusaka, Zambia.',
            'location' => "Lusaka, Zambia",
            'status' => "active", // Correct enum value
            // 'is_open' => true, // Shop is open
        ]);

        Shop::create([
            'name' => "Puma Lusaka",
            // 'slug' => 'puma-lusaka',
            // 'description' => 'Puma Store in Lusaka, Zambia.',
            'location' => "Lusaka, Zambia",
            'status' => "active", // Correct enum value
            // 'is_open' => true, // Shop is open
        ]);
    }
}
