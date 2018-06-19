<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Hotel::class, 20)->create()->each(function ($h) {
            $h->service()->save(new App\Service());
            $h->room()->saveMany(factory(App\Room::class, rand(3,10))->create()->all());
            $h->restaurant()->saveMany(factory(App\Restaurant::class, rand(0,2))->create()->all());
        });
    }
}