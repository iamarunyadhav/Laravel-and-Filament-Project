<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductType;

class ProductTypeSeeder extends Seeder
{
    public function run()
    {
        $types = [
            ['name' => 'Laptop', 'api_unique_number' => '123456'],
            ['name' => 'Shirt', 'api_unique_number' => '789012'],
            ['name' => 'Table', 'api_unique_number' => '345678']
        ];

        foreach ($types as $type) {
            ProductType::create($type);
        }
    }
}
