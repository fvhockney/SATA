<?php

use Faker\Generator as Faker;

$factory->define(App\Fare::class, function (Faker $faker) {
    return [
        'type' => $faker->word,
        'price' => $faker->randomFloat(2,0,450),
    ];
});