<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'url'];

    public function types()
    {
        return $this->belongsToMany(ProductType::class, 'type_assignment', 'category_id', 'type_id');
    }
}
