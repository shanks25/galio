<?php

namespace App;
use App\PharmacyDeliveryMaster;
use App\Pincode;
use App\SampleCost;

use App\User;
use App\State;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city_master';
    public $timestamps = false;

    public function state(){
        return $this->belongsTo(State::class);
    }
}