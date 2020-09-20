<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    public function product()
    {
        return $this->belongsTo('App\ProductMaster', 'product_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'customer_id');
    }

    public function seller()
    {
        return $this->belongsTo('App\User', 'seller_id');
    }



    public function address()
    {
        return $this->hasOne('App\AddressMaster', 'order_id');
    }
}
