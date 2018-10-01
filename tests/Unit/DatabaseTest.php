<?php
/**
 * Created by PhpStorm.
 * User: vern
 * Date: 27.06.18
 * Time: 20:50
 */

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class DatabaseTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    protected function setUp()
    {
        parent::setUp();
        $this->withoutExceptionHandling();
    }


    public function testCustomerDatabase(){
        $customer = factory(\App\Customer::class)->create();
        $this->assertDatabaseHas('customers', $customer->toArray());
    }

    public function testBookingDatabase(){
        $booking = factory(\App\Booking::class)->create();
        $this->assertDatabaseHas('bookings', $booking->toArray());
    }

    public function testTripsDatabase(){
        $trip = factory(\App\Trip::class)->create();
        $this->assertDatabaseHas('trips', $trip->toArray());
    }

    public function testNewTripAssignedToCustomer(){
        $customer = factory(\App\Customer::class)->create();
        $trip = new \App\Trip();
        $customer->trips()->save($trip);
        $this->assertEquals($trip->toArray(), $customer->trips->first()->toArray());
    }

    public function testNewBookingAssignedToTrip(){
        $customer = factory(\App\Customer::class)->create();
        $trip = new \App\Trip();
        $customer->trips()->save($trip);
        $booking = factory(\App\Booking::class)->create();
        $customer->trips->first()->bookings()->save($booking);
        $this->assertEquals($customer->trips->first()->bookings->first()->toArray(), $booking->toArray());
    }
}
