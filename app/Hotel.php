<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'street',
        'city',
        'zip',
        'website',
        'main_phone',
        'stars',
        'price_tier',
    ];
}
