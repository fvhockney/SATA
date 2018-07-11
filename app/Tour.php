<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ServicesTraits;

class Tour extends Model
{
    use ServicesTraits;

    protected $fillable = ['name', 'type'];

    public function getDeleteLinkAttribute(){
        return action('Admin\TourController@destroy', ['tour' => $this]);
    }

    public function getUpdateLinkAttribute() {
        return action('Admin\TourController@update', ['tour' => $this]);
    }
}
