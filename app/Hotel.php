<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ServicesTraits;

class Hotel extends Model
{
    use ServicesTraits;

    protected $fillable = ['name', 'type'];

    public function restaurant() {
        return $this->hasMany(Restaurant::class);
    }

    public function room() {
        return $this->hasMany(Room::class);
    }

    public function getDeleteLinkAttribute(){
        return action('Admin\HotelController@destroy', ['hotel' => $this]);
    }

    public function getUpdateLinkAttribute() {
        return action('Admin\HotelController@update', ['hotel' => $this]);
    }
}
