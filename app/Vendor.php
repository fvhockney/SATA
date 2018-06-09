<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'company',
        'contact_name',
        'street',
        'city',
        'zip',
        'country',
        'phone',
        'email',
        'website',
    ];
}
