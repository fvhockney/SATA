<?php

use Illuminate\Database\Seeder;

class TransportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Transport::class, 20)->create()->each(function ($t) {
            $t->service()->save(new App\Service());
            $t->fare()->saveMany(factory(App\Fare::class, rand(5,10))->create()->all());
        });
    }
}