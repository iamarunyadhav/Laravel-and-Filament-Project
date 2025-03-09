<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAssignment extends Model
{
    use HasFactory;

    protected $table = 'type_assignments';

    protected $fillable = ['type_assignments_type', 'type_assignments_id', 'my_bonus_field', 'type_id'];

    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'type_id');
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'type_assignments_id');
    }
}
