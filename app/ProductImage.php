<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        'filename', 'resized_name', 'original_name', 'product_id',
    ];
}
