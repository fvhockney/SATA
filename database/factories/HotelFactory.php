<?php

use Faker\Generator as Faker;
use Faker\Provider\Address;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Hotel::class, function (Faker $faker) {
    return [
        'name'=>$faker->company,
        'street_number'=>$faker->buildingNumber,
        'street'=>$faker->streetName,
        'city'=>$faker->city,
        'zip'=>Address::postcode(),
        'website'=>$faker->domainName,
        'main_phone'=>$faker->e164PhoneNumber,
        'stars'=>$faker->numberBetween($min = 0, $max = 5),
        'price'=>$faker->numberBetween($min = 0, $max = 5),
        'lat'=>$faker->latitude($min = 31.75, $max =31.99 ),
        'long'=>$faker->longitude($min = 34.75, $max =34.99 ),
    ];
});
