<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{
    protected $fillable = ['price', 'type'];

    public function transport(){
        return $this->belongsTo(Transport::class);
    }
}
