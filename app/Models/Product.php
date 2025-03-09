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

    public function productTypes()
    {
        // return $this->belongsToMany(ProductType::class, 'type_assignments','type_assignments_id', 'type_id');

        return $this->belongsToMany(ProductType::class, 'type_assignments', 'product_id', 'type_id')
                    ->withPivot('type_assignments_type', 'my_bonus_field')
                    ->withTimestamps();
    }

    public function isCategoryAllowed(ProductCategory $category): bool
    {
        return $category->types()->whereIn('id', $this->types()->pluck('id'))->exists();
    }
}
