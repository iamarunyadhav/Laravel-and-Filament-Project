<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        // Fetch all product categories
        $productCategories = ProductCategory::all();

        // Return the view with product categories
        return view('product-categories.index', compact('productCategories'));
    }

}
