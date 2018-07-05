<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'street',
        'city',
        'zip',
        'country',
        'phone',
        'email',
        'name',
    ];

    public function hotels()
    {
        return $this->morphedByMany(Hotel::class, 'contactable');
    }

    public function attractions()
    {
        return $this->morphedByMany(Attraction::class, 'contactable');
    }

    public function restaurants()
    {
        return $this->morphedByMany(Restaurant::class, 'contactable');
    }

    public function tours()
    {
        return $this->morphedByMany(Tour::class, 'contactable');
    }

    public function transports()
    {
        return $this->morphedByMany(Transport::class, 'contactable');
    }
}
