<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
   protected $fillable = ['name'];

   public function service() {
       return $this->belongsToMany(Service::class);
   }
}
