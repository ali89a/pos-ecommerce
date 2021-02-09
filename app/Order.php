<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'mobile',
        'address',
        'city',
        'email',
        'postcode',
        'coupon',
        'invoice_number',
        'subtotal',
        'discount',
        'grandtotal',
        'customer_id',
        'comments',
        'creator_user_id',
        'updator_user_id',
    ];
}
