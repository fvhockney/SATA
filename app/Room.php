<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Hotel
{
    protected $fillable = ['price', 'type'];

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }

    public function getDeleteLinkAttribute() {
        return action('Admin\RoomController@destroy', ['room' => $this]);
    }

    public function getUpdateLinkAttribute() {
        return action('Admin\RoomController@update', ['room' => $this]);
    }
}
