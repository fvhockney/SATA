<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Restaurant
{
    protected $fillable = ['name', 'type', 'price', 'dish'];

    public function restaurant()
    {
         return $this->belongsTo(Restaurant::class);
    }

    public function getDeleteLinkAttribute() {
        return action('Admin\DishController@destroy', ['dish' => $this]);
    }

    public function getUpdateLinkAttribute() {
        return action('Admin\DishController@update', ['dish' => $this]);
    }
}
