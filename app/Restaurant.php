<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = ['name', 'type'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function service()
    {
        return $this->morphOne(Service::class, 'serviceable');
    }

    public function dish() {
        return $this->hasMany(Dish::class);
    }
}
