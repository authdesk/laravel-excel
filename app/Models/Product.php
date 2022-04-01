<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'product_name',
        'product_brand',
        'product_price',
        'product_processor',
        'product_ram',
        'product_storage',
        'product_screen',
        'product_image',
        'status'
    ];
}
