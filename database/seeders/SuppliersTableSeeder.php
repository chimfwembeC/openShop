<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
         // Create sample suppliers
         Supplier::create([
            'name' => 'Adidas',
            'contact_name' => 'John Doe',
            'phone' => '123-456-7890',
            'email' => 'john.doe@adidas.com',
            'address' => '123 Adidas St, Sports City, Country',
            'website' => 'https://www.adidas.com',
        ]);

        Supplier::create([
            'name' => 'Nike',
            'contact_name' => 'Jane Smith',
            'phone' => '098-765-4321',
            'email' => 'jane.smith@nike.com',
            'address' => '456 Nike Rd, Fitness Town, Country',
            'website' => 'https://www.nike.com',
        ]);
    }
}
