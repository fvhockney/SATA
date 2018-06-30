<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'street' => $faker->streetAddress,
        'city' => $faker->city,
        'zip' => $faker->postcode,
        'country' => $faker->randomElement(array('US', 'IL')),
        'name' => $faker->name,
        'phone' => $faker->e164PhoneNumber,
        'email' => $faker->safeEmail,
        ];
});
