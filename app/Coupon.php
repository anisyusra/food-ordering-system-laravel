<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = 
    [
        'coupon_code',
        'coupon_type',
        'coupon_value',
        'min_cart_value',
        'expired_on',
        'coupon_code_status',
        'added_on',
    ];

    protected $primaryKey = 'coupon_id';
}
