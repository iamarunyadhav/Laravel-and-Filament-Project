<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAssignment extends Model
{
    use HasFactory;

    protected $table = 'type_assignments';

    protected $fillable = ['type_assignments_id','type_id','my_bonus_field','type_assignments_type'];

    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'type_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'type_assignments_id');
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
