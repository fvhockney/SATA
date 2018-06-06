<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Todo::class, function (Faker $faker) {

    $status = $faker->randomElement($array = array (0, 1));
    $completed_at = ($status == 0) ? now() : null;

    return [
        'name'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
        'user' => $faker->randomElement($array = array ('Brian', 'Vern')),
        'status' => $status,
        'completed_at' => $completed_at,
    ];
});
