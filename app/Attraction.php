<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ServicesTraits;

class Attraction extends Model
{
    use ServicesTraits;

    protected $fillable = [
        'name',
        'type',
    ];

    public function getDeleteLinkAttribute(){
        return action('Admin\AttractionController@destroy', ['attraction' => $this]);
    }

    public function getUpdateLinkAttribute() {
        return action('Admin\AttractionController@update', ['attraction' => $this]);
    }

}
