<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ServicesTraits;

class Restaurant extends Model
{
    use ServicesTraits;

    protected $fillable = ['name', 'type'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function dish() {
        return $this->hasMany(Dish::class);
    }

    public function getDeleteLinkAttribute(){
        return action('Admin\RestaurantController@destroy', ['restaurant' => $this]);
    }

    public function getUpdateLinkAttribute() {
        return action('Admin\RestaurantController@update', ['restaurant' => $this]);
    }
}
