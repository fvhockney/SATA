<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(array('single', 'double', 'luxury')),
        'price' => $faker->randomFloat(2,0,350),
    ];
});