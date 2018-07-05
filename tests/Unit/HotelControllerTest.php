<?php
/**
 * Created by PhpStorm.
 * User: vern
 * Date: 27.06.18
 * Time: 20:50
 */

namespace Tests\Unit;

use App\Contact;
use App\Http\Controllers\Admin\HotelController;
use App\Room;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class HotelControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    protected function setUp()
    {
        parent::setUp();
        $this->user = factory(\App\User::class)->make();

        $this->withoutExceptionHandling();
    }

    /**
     * @dataProvider  allNewProvider
     */
    public function testStoreStoresHotelAndReturnsSame($request)
    {
        $response = $this->actingAs($this->user)
            ->json('POST','/admin/hotel', $request);
        $hotel = collect($request)->only(['name', 'type'])->all();
        $rooms = \App\Hotel::find(1)->room;
        $contacts = \App\Hotel::find(1)->contact;

        $response
            ->assertStatus(200)
            ->assertJson(['hotel'=>$hotel]);

        $this->assertDatabaseHas('hotels', $hotel);
        $this->assertEquals(3, count($rooms));
//        $this->assertEquals(2, count($contacts));
        foreach ($request['contacts'] as $contact){
            $contact = collect($contact)->except(['localId', 'notes'])->all();
            $this->assertDatabaseHas('contacts', $contact);
        }
        foreach ($request['rooms'] as $room){
            $room = collect($room)->except('localId')->all();
            $this->assertDatabaseHas('rooms', $room);
        }
        $this->assertEquals(2, Contact::count());
        $this->assertEquals(3, Room::count());
    }

    public function allNewProvider() {
        $this->refreshApplication();
        $contact = factory(\App\Contact::class, 2)->make();
        $contact = $contact->toArray();
        $room = factory(\App\Room::class, 3)->make()->toArray();
        $hotel = factory(\App\Hotel::class)->make()->toArray();
        foreach ($contact as $c){
            $c['notes'] = [];
            $c['localId'] = random_bytes(6);
        }
        foreach ($room as $r){
            $r['localId'] = random_bytes(6);
        }

        $request = ['name'=>$hotel['name'], 'type'=>$hotel['type'], 'rooms' => $room, 'contacts' => $contact, 'notes' => []];
        return [
            'all new' => [$request],
        ];
    }
}
