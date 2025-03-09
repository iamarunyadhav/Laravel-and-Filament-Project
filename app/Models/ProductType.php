<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'api_unique_number'];

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class, 'type_assignments', 'type_id', 'category_id');
    }

    public function products()
    {
        // return $this->belongsToMany(Product::class, 'type_assignments', 'type_id', 'type_assignments_id');

        return $this->belongsToMany(Product::class, 'type_assignments', 'type_id', 'product_id')
        ->withPivot('type_assignments_type', 'my_bonus_field')
        ->withTimestamps();
    }
}
