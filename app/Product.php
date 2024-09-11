<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'product_name',
        'product_new_price',
        'product_old_price',
        'product_description'
    ];
}
