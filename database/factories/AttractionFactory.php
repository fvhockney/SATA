<?php

use Faker\Generator as Faker;

$factory->define(App\Attraction::class, function (Faker $faker) {
    return [
        'name'=>$faker->company,
        'street'=>$faker->streetName,
        'city'=>$faker->city,
        'zip'=>Address::postcode(),
        'website'=>$faker->domainName,
        'main_phone'=>$faker->e164PhoneNumber,
        'stars'=>$faker->numberBetween($min = 0, $max = 5),
        'price_tier'=>$faker->numberBetween($min = 0, $max = 5),        //
    ];
});
