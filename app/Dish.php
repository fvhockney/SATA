<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Restaurant
{
    protected $fillable = ['name', 'price', 'dish'];

    public function restaurant()
    {
         return $this->belongsTo(Restaurant::class);
    }
}
