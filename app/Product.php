<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_id', 'product_name', 'product_price', 'product_old_price', 'product_rating', 'product_stock', 'product_desc', 'sub_id', 'onsale',
    ];
}
