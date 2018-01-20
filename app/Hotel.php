<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //

    protected $fillable = [
      'name','street_number','street','city','zip','website','main_phone','stars','price','lat','long','created_at','modified_at'
    ];

}
