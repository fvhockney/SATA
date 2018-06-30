<?php

use Faker\Generator as Faker;

$factory->define(App\Fare::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(array('bus', 'private', 'taxi', 'train')),
        'price' => $faker->randomFloat(2,0,450),
    ];
});