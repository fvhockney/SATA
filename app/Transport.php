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
}
