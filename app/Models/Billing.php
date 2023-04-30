<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $table = 'billing';

    protected $fillable = [
        'firstName',
        'lastName',
        'phoneNumber',
        'email',
        'address',
        'country_id',
        'city',
        'zipcode',
        'user_id',
        'info'
        ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

}
