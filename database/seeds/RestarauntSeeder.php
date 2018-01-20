<?php

use Illuminate\Database\Seeder;

class RestarauntSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Restaraunt::class, 25)->create();
    }
}
