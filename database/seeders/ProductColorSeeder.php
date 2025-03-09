<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductColor;

class ProductColorSeeder extends Seeder
{
    public function run()
    {
        $colors = [
            ['name' => 'Red', 'hex_code' => '#FF0000'],
            ['name' => 'Green', 'hex_code' => '#00FF00'],
            ['name' => 'Blue', 'hex_code' => '#0000FF'],
            ['name' => 'Yellow', 'hex_code' => '#FFFF00'],
            ['name' => 'Black', 'hex_code' => '#000000'],
            ['name' => 'White', 'hex_code' => '#FFFFFF']
        ];

        foreach ($colors as $color) {
            ProductColor::create($color); // Assuming you have a ProductColor model
        }
    }
}
