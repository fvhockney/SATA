<?php

use Illuminate\Database\Seeder;

class VendorServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendors = App\Vendor::all();
        $servicesCount = App\Service::count();

        foreach ($vendors as $vendor) {
            $services = App\Service::all()->random(rand(1,$servicesCount))->map(function ($service){return $service->id;});
            $vendor->service()->attach($services->all());
        }
    }
}