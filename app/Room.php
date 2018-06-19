<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['price', 'type'];

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }
}
