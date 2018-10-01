<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['status','age','gender','nationality'];

    public function booking() {
      return $this->hasMany('App\Booking');
    }

    public function trips(){
        return $this->hasMany('App\Trip');
    }

    public function getDeleteLinkAttribute(){
        return action('Admin\CustomerController@destroy', ['customer' => $this]);
    }

    public function getUpdateLinkAttribute() {
        return action('Admin\CustomerController@update', ['customer' => $this]);
    }


    // Customer contact inhereted from Contact::class
    // Notes inhereted from Note::class

    // $customer->trip() Creates new trip
    // $trip->book($service) Book a new service to a customers trip
    // $trip->iteneary Returns all trip bookings
    // $customer->trips Returns all customers trips

    // Include Status (Acvite, Inactive, Pending)

    // allergies, dietary restrictions
    // Include trip_members
    // Include Bookings
    // Include Balance due (Total Cost - Balance Paid)
    // Include Balance paid (Total of Bookings paid)
    // Include Total Cost (Total of Bookings)
    // Include Iternary (Composed of All bookings for Customer)
}
