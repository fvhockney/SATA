<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{

    protected $fillable = ['name'];

    public function posts(){

      return $this->belongsToMany(Post::class);

    }

    public function getRouteKeyName(){

      return 'name';

    }
}
