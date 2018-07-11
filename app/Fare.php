<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fare extends Transport
{
    protected $fillable = ['price', 'type'];

    public function transport(){
        return $this->belongsTo(Transport::class);
    }

    public function getDeleteLinkAttribute() {
        return action('Admin\FareController@destroy', ['fare' => $this]);
    }

    public function getUpdateLinkAttribute() {
        return action('Admin\FareController@update', ['fare' => $this]);
    }
}
