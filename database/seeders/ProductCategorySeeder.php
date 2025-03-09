<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;
use App\Models\ProductColor;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        // Get the first product color (You should have data in the product_colors table)
        // $productColorId = ProductColor::first()->id;
        // $redColor = ProductColor::where('name', 'Red')->first()->id;
        // $greenColor = ProductColor::where('name', 'Green')->first()->id;
        // $blueColor = ProductColor::where('name', 'Blue')->first()->id;

        // Seed the product categories with a valid product_color_id
        $categories = [
            ['name' => 'Electronics', 'description' => 'Electronic items', 'external_url' => 'https://example.com/electronics'],
            ['name' => 'Clothing', 'description' => 'Apparel and fashion', 'external_url' => 'https://example.com/clothing'],
            ['name' => 'Furniture', 'description' => 'Home and office furniture', 'external_url' => 'https://example.com/furniture'],
        ];

        foreach ($categories as $category) {
            ProductCategory::create($category);
        }
    }
}
