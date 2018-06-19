<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'type' => $faker->word,
        'price' => $faker->randomFloat(2,0,350),
    ];
});