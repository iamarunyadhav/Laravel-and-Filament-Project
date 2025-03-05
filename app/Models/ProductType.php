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
        return $this->belongsToMany(ProductCategory::class, 'type_assignment', 'type_id', 'category_id');
    }
}
