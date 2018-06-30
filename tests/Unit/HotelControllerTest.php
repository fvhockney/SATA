<?php
/**
 * Created by PhpStorm.
 * User: vern
 * Date: 27.06.18
 * Time: 20:50
 */

namespace Tests\Unit;

use App\Http\Controllers\Admin\HotelController;
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
        $this->hotel = factory(\App\Hotel::class)->make();
        $this->contact = factory(\App\Contact::class)->make();
        $this->request = collect($this->hotel)->only(['name','type'])->all();
    }

    public function testStoreStoresHotelAndReturnsSame()
    {
        $response = $this->actingAs($this->user)
            ->json('POST', '/admin/hotel', $this->request);
        $hotel = \App\Hotel::where('name',$this->hotel->name)->first()->toArray();
        $this->assertDatabaseHas('hotels', $hotel);

        $response->assertExactJson($hotel);
    }
}
