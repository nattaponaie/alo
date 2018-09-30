<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    protected $fillable = [
        'sub_cat_name', 'cat_id', 'sub_amount',
    ];
}
