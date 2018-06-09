<?php

use Faker\Generator as Faker;
use Faker\Provider\Address;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Restaurant::class, function ( Faker $faker) {
    return [
        'name'=>$faker->company,
        'street'=>$faker->streetName,
        'city'=>$faker->city,
        'zip'=>Address::postcode(),
        'website'=>$faker->domainName,
        'main_phone'=>$faker->e164PhoneNumber,
        'stars'=>$faker->numberBetween($min = 0, $max = 5),
        'price_tier'=>$faker->numberBetween($min = 0, $max = 5),
    ];
});
