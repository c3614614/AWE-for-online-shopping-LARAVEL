<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['artist', 'title', 'price', 'product_type_id', 'imagename'];

    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }
}
