<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $fillable = array(
        'name',
        'street',
        'city',
        'zip',
        'website',
        'main_phone',
        'stars',
        'price_tier',
        'created_at',
        'modified_at',
    );    //
}
