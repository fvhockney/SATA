<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ServicesTraits;

class Attraction extends Model
{
    use ServicesTraits;

    protected $fillable = [
        'name',
        'type',
    ];

}
