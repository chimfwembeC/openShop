<?php

namespace Database\Seeders;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Supplier;

use Illuminate\Database\Seeder;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier1 = Supplier::where('name', 'Adidas')->first();
        $supplier2 = Supplier::where('name', 'Nike')->first();

        $product1 = Product::create([
            'name' => 'NMD_R1 Shoes',
            'slug' => 'nmd_r1-shoes',
            'details' => 'KNIT NMD SHOES WITH ENERGY-RETURNING CUSHIONING AND A KEY CHAIN CLIP',
            'price' => 130,
            'description' => 'Lorem ipsum dolor sit amet...',
            'sku' => 'nmd_r1_shoes_001',
            'stock_quantity' => 100,
            'discount_price' => 110.00,
            'is_active' => true,
            'shop_id' => 1,
            'supplier_id' => $supplier1->id, // Using Adidas supplier
        ]);

        ProductImage::create([
            'product_id' => $product1->id,
            'image_path' => 'images/nmd_r1_shoes_001.png',
            'alt_text' => 'NMD_R1 Shoes',
            'order' => 1,
        ]);

        $product2 = Product::create([
            'name' => 'SUPERSTAR FOUNDATION SHOES',
            'slug' => 'superstar-foundation-shoes',
            'details' => 'KNIT NMD SHOES WITH ENERGY-RETURNING CUSHIONING AND A KEY CHAIN CLIP',
            'price' => 80,
            'description' => 'Lorem ipsum dolor sit amet...',
            'sku' => 'superstar_foundation_001',
            'stock_quantity' => 50,
            'discount_price' => 70.00,
            'is_active' => true,
            'shop_id' => 2,
            'supplier_id' => $supplier1->id, // Using Adidas supplier
        ]);

        ProductImage::create([
            'product_id' => $product2->id,
            'image_path' => 'images/superstar_foundation_001.png',
            'alt_text' => 'Superstar Foundation Shoes',
            'order' => 1,
        ]);

        $product3 = Product::create([
            'name' => 'Nike Air Zoom Pegasus',
            'slug' => 'nike-air-zoom-pegasus',
            'details' => 'Nike Air Zoom Pegasus running shoes with responsive cushioning.',
            'price' => 120,
            'description' => 'Lorem ipsum dolor sit amet...',
            'sku' => 'nike_pegasus_001',
            'stock_quantity' => 75,
            'discount_price' => 110.00,
            'is_active' => true,
            'shop_id' => 3,
            'supplier_id' => $supplier2->id, // Using Nike supplier
        ]);


        ProductImage::create([
            'product_id' => $product3->id,
            'image_path' => 'products/Nike Air Zoom Pegasus black - full.png',
            'alt_text' => 'Nike Air Zoom Pegasus black Front',
            'order' => 3,
        ]);

        ProductImage::create([
            'product_id' => $product3->id,
            'image_path' => 'products/Nike Air Zoom Pegasus black - one up , one flat.png',
            'alt_text' => 'Nike Air Zoom Pegasus black',
            'order' => 2,
        ]);

        ProductImage::create([
            'product_id' => $product3->id,
            'image_path' => 'products/Nike Air Zoom Pegasus black -front.png',
            'alt_text' => 'Nike Air Zoom Pegasus black Front',
            'order' => 3,
        ]);

        ProductImage::create([
            'product_id' => $product3->id,
            'image_path' => 'products/Nike Air Zoom Pegasus black - back.png',
            'alt_text' => 'Nike Air Zoom Pegasus black Back',
            'order' => 4,
        ]);
    }
}
