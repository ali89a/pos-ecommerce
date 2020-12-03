<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function items(){

        return $this->hasMany('App\Model\SaleItem', 'sale_id');

    }
     public function stock_out_items(){

        return $this->hasMany('App\Model\StockOut', 'sale_id');

    }
     public function user(){

        return $this->belongsTo('App\Model\User', 'creator_user_id');

    }
}
