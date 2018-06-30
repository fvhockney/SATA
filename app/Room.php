<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Hotel
{
    protected $fillable = ['price', 'type'];

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }
}
