<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = ['name', 'type'];

    public function service() {
        return $this->morphMany('App\Service', 'serviceable');
    }
}
