<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    public function customer()
    {
      return $this->belongsTo('App\Customer');
    }

    public function bookings()
    {
      return $this->hasMany('App\Booking');
    }
}
