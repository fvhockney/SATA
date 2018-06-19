<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name', 'type'];

    public function service() {
        return $this->morphOne(Service::class, 'serviceable');
    }

    public function restaurant() {
        return $this->hasMany(Restaurant::class);
    }

    public function room() {
        return $this->hasMany(Room::class);
    }
}
