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
}
