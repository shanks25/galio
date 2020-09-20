<?php

namespace App;

use App\City;
use App\State;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function city()
    {
        return $this->belongsTo(City::class,'city_id');
    } 

    public function state()
    {
        return $this->belongsTo(State::class,'state_id');
    } 

    public function getFullNameAttribute()	 	 
    {	 	 
        return $this->first_name . " " . $this->last_name;	 	 
    }

    public function sellOrders()
    {
        return $this->hasMany('App\Order', 'seller_id');
    }
}
