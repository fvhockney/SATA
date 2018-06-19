<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $fillable = ['name', 'type'];

    public function service() {
        return $this->morphOne(Service::class, 'serviceable');
    }

    public function fare() {
        return $this->hasMany(Fare::class);
    }
}
