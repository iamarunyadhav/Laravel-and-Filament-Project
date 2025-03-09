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

    // Store a new product category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'external_url' => 'nullable|url',
        ]);

        // Create the new product category
        $category = ProductCategory::create($request->all());

        // Redirect to the product category index page after saving
        return redirect()->route('product-categories.index')->with('success', 'Product Category Created Successfully!');
    }

    // Edit an existing product category
    public function edit($id)
    {
        $productCategory = ProductCategory::findOrFail($id);
        return view('product-categories.edit', compact('productCategory'));
    }

    // Update an existing product category
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'external_url' => 'nullable|url',
        ]);

        $productCategory = ProductCategory::findOrFail($id);
        $productCategory->update($request->all());

        // After saving, redirect back to the product category list page
        return redirect()->route('product-categories.index')->with('success', 'Product Category Updated Successfully!');
    }

    // Delete a product category
    public function destroy($id)
    {
        $productCategory = ProductCategory::findOrFail($id);
        $productCategory->delete();

        // Redirect back to the index page after deletion
        return redirect()->route('product-categories.index')->with('success', 'Product Category Deleted Successfully!');
    }
}
