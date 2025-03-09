<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\TypeAssignment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeAssignmentSeeder extends Seeder
{
    public function run()
    {
        $productA = Product::where('name', 'Product A')->first();
        $productB = Product::where('name', 'Product B')->first();
        $electronics = ProductType::where('name', 'Electronics')->first();
        $furniture = ProductType::where('name', 'Furniture')->first();

        // Attach product types to products
        if ($productA && $electronics) {
            $productA->productTypes()->attach($electronics->id);
        }

        if ($productB && $furniture) {
            $productB->productTypes()->attach($furniture->id);
        }
    }
}
