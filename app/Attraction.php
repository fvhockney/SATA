<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $fillable = ['name', 'type'];

    public function service() {
        return $this->morphOne(Service::class, 'serviceable');
    }
}
