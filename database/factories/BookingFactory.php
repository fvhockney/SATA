<?php

use Faker\Generator as Faker;

$factory->define(App\Booking::class, function (Faker $faker) {
    return [
        'status' => $faker->randomElement(['inactive','pending','active']),
        'price' => $faker->randomFloat(2),
        'paid' => $faker->randomElement([true, false]),
        'confirmation_number' => $faker->uuid,
        'confirmation_date' => $faker->date(),
        'booked_date' => $faker->date(),
    ];
});
