<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SaleItem extends Model
{

    protected $guarded = ['id'];
    public function product()
    {

        return $this->belongsTo('App\Model\Product', 'product_id');
    }
}
