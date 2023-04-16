<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $table = 'shoppingcarts';

    protected $fillable = [
        'product_id',
        'name',
        'price',
        'quantity',
        'image',
        'user_id'
    ];
}
