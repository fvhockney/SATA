<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function vendor() {
        return $this->belongsToMany(Vendor::class);
    }

    public function serviceable() {
        return $this->morphTo();
    }
}
