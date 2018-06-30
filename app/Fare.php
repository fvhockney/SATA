<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fare extends Transport
{
    protected $fillable = ['price', 'type'];

    public function transport(){
        return $this->belongsTo(Transport::class);
    }
}
