<?php

use Faker\Generator as Faker;

$factory->define(App\Attraction::class, function (Faker $faker) {
    return [
        'name'=>$faker->company
    ];
});
