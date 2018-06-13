<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name'];

    public function service() {
        return $this->morphMany(Service::class, 'serviceable');
    }
}
