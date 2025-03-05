<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'type_id', 'color_id'];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function type()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function color()
    {
        return $this->belongsTo(ProductColor::class);
    }

    public function isCategoryAllowed(ProductCategory $category): bool
    {
        return $category->types()->where('id', $this->type_id)->exists();
    }
}
