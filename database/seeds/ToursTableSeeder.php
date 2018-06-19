<?php

use Illuminate\Database\Seeder;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tour::class, 20)->create()->each(function ($t) {
            $t->service()->save(new App\Service());
        });
    }
}