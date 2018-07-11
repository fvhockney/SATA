<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ServicesTraits;

class Transport extends Model
{
    use ServicesTraits;

    protected $fillable = ['name', 'type'];

    public function fare() {
        return $this->hasMany(Fare::class);
    }

    public function getDeleteLinkAttribute(){
        return action('Admin\TransportController@destroy', ['transport' => $this]);
    }

    public function getUpdateLinkAttribute() {
        return action('Admin\TransportController@update', ['transport' => $this]);
    }
}
