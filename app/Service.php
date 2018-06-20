<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function serviceable() {
        return $this->morphTo();
    }
}
