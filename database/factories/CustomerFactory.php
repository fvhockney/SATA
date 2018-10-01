<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'age' => $faker->numberBetween(18,75),
        'gender' => $faker->randomElement(['male','female']),
        'nationality' => $faker->countryCode,
        'status' => $faker->randomElement(['active','inactive'])
    ];
});
