<?php

use Illuminate\Database\Seeder;

class AttractionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Attraction::class, 20)->create()->each(function ($a) {
            $a->service()->save(new App\Service());
        });
    }
}