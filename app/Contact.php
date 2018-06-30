<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'street',
        'city',
        'zip',
        'country',
        'phone',
        'email',
        'name',
    ];

    public function contactable()
    {
        return $this->morphTo();
    }
}
