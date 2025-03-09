<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ['name' => 'MacBook Pro', 'product_category_id' => 1, 'product_color_id' => 1, 'description' => 'Apple Laptop'],
            ['name' => 'Nike T-Shirt', 'product_category_id' => 2, 'product_color_id' => 2, 'description' => 'Comfortable cotton t-shirt'],
            ['name' => 'Office Desk', 'product_category_id' => 3, 'product_color_id' => 3, 'description' => 'Wooden office table']
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
