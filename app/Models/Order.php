<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'zip',
        'city',
        'country',
        'phone',
        'email',
        'shipping_charges',
        'discount',
        'order_status',
        'payment_status',
        'total',
    ];
}
