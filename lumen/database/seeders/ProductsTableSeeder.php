<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Sample Product 1',
            'price' => 19.99,
            'description' => 'Description for product 1',
            'image_url' => 'img1.png'
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'price' => 29.99,
            'description' => 'Description for product 2',
            'image_url' => 'img2.png'
        ]);

        // Add more products as needed
    }
}
