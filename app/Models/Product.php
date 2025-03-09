<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'product_category_id', 'product_color_id'];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function productColor()
    {
        return $this->belongsTo(ProductColor::class, 'product_color_id');
    }

    public function typeAssignments()
    {
        return $this->belongsToMany(TypeAssignment::class, 'product_type_assignments');
    }

    public function productTypes()
    {
        return $this->hasManyThrough(
            ProductType::class,
            TypeAssignment::class,
            'type_assignments_id', // Foreign key on TypeAssignment table
            'id', // Foreign key on ProductType table
            'id', // Local key on Product table
            'type_id' // Local key on TypeAssignment table
        );
    }

    public function isCategoryAllowed(ProductCategory $category): bool
    {
        return $category->types()->whereIn('id', $this->types()->pluck('id'))->exists();
    }
}
