<?php

use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Restaurant::class, 20)->create()->each(function ($r) {
            $r->service()->save(new App\Service());
            $r->dish()->saveMany(factory(App\Dish::class, rand(10,20))->create()->all());
        });
    }
}