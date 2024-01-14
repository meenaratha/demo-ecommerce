<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //use HasFactory;

    protected $fillable = [
        'product_name',
        'product_description',
        'original_price',
        'discount_price',
        'tax',
        'brand',
        'product_code',
        'reward_point',
        'stock',
        'quantity',
        'meta_tag',
        'productimage',
        'product_thumbnail',
        'discount_option',
        'status',
        'category_id',


    ];
}
