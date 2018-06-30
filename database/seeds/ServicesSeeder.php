<?php

use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Hotels
        factory(App\Hotel::class, 20)->create()->each(function ( $h ) {
            $this->makeContact($h);
            $this->makeRooms($h);
            $h->restaurant()
                ->saveMany(factory(App\Restaurant::class, rand(0, 2))
                    ->create()
                    ->each(function ( $r ) {
                        $this->makeContact($r);
                        $r->dish()
                            ->saveMany(factory(App\Dish::class, rand(10, 20))
                                ->create()
                                ->all());
                    })->all());
        });

        // Attractions
        factory(App\Attraction::class, 20)->create()->each(function ( $a ) {
            $this->makeContact($a);
        });

        // Restaurants
        factory(App\Restaurant::class, 20)->create()->each(function ( $r ) {
            $this->makeContact($r);
            $r->dish()->saveMany(factory(App\Dish::class, rand(10, 20))->create()->all());
        });

        // Tours
        factory(App\Tour::class, 20)->create()->each(function ( $t ) {
            $this->makeContact($t);
        });

        // Transports
        factory(App\Transport::class, 20)->create()->each(function ( $t ) {
            $this->makeContact($t);
            $t->fare()->saveMany(factory(App\Fare::class, rand(5, 10))->create()->all());
        });
    }

    private function makeContact( $i )
    {
        $i->contact()->saveMany(factory(App\Contact::class, rand(1,3))->make());
    }

    private function makeRooms( $h )
    {
        $h->room()->saveMany(factory(App\Room::class, rand(3, 10))->create()->all());
    }
}
