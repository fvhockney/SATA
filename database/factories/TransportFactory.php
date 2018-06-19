<?php

use Faker\Generator as Faker;

$factory->define(App\Transport::class, function (Faker $faker) {
    return [
        'name' => $faker->company
    ];
});