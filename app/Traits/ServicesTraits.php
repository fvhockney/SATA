<?php

namespace App\Traits;

use App\Booking;
use App\Contact;
use App\Note;

trait ServicesTraits
{
    public function contact() {
        return $this->morphToMany(Contact::class, 'contactable');
    }

    public function booking() {
        return $this->morphMany(Booking::class, 'bookable');
    }

    public function note() {
        return $this->morphMany(Note::class, 'noteable');
    }
}