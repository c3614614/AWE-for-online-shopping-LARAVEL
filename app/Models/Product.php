<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['artist', 'title', 'price'];

    public function ProductType()
    {
        return $this-> belongsTo('App\Models\ProductType','product_type_id', 'id');
    }
}
