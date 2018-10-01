<?php

namespace Tests\Feature;

use phpDocumentor\Reflection\Type;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class CustomerControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    protected function setUp()
    {
        parent::setUp();
        $this->withoutExceptionHandling();
    }

    public function testStoreCustomer()
    {
        $customer = factory(\App\Customer::class)->raw();
        $response = $this->json('POST', action('Admin\CustomerController@store'), $customer);
        $response->assertSuccessful();
        $response->assertJsonFragment($customer);
        $this->assertDatabaseHas('customers', $customer);
    }

    public function testUpdateCustomer()
    {
        $customer = factory(\App\Customer::class)->create();
        $request = ['age' => 60];
        $response = $this->json('PUT', action('Admin\CustomerController@update', ['id' => $customer->id]), $request);
        $response->assertSuccessful();
        $response->assertJsonFragment($request);
        $this->assertDatabaseHas('customers', ['id' => $customer->id, 'age' => 60]);
    }

    public function testDeleteCustomer()
    {
        $customer = factory(\App\Customer::class)->create();
        $response = $this->json('DELETE', action('Admin\CustomerController@destroy', ['id' => $customer->id]));
        $response->assertSuccessful();
        $response->assertJsonFragment(['status' => 'Customer deleted']);
        $this->assertDatabaseMissing('customers', $customer->toArray());
    }
}
