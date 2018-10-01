<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['status', 'price', 'paid', 'confirmation_number', 'confirmation_date', 'booked_date'];

    public function bookable()
    {
        return $this->morphTo();
    }

    public function trip()
    {
        return $this->belongsTo('App\Trip');
    }

    // Can have notes

    // Booking Number (could be the booking ID)

    // Status (Confirmed, Pending, Booked)
    // Price
    // Paid (boolean)
    // Confirmation Number
    // Confirmation Date
    // Booked Date
}
