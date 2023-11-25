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
        'firstName',
        'lastName',
        'phoneNumber',
        'email',
        'address',
        'zipcode',
        'city',
        'country_id',
        'comment',
        'companyName',
        'taxNumber',
        'shipFirstName',
        'shipLastName',
        'shipPhoneNumber',
        'shipEmail',
        'shipAddress',
        'shipZipcode',
        'shipCity',
        'shipCountry_id',
        'shipComment',
        'shippingCharges',
        'discount',
        'order_status',
        'payment_status',
        'subTotal',
        'discountPrice',
        'total',
        'order_id',
        'payment_info',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }


    public function shipCountry()
    {
        return $this->belongsTo(Country::class, 'shipCountry_id', 'id');
    }
}
