<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Todo::class, function (Faker $faker) {

    $status = $faker->randomElement($array = array ('completed', 'active'));
    $completed_at = ($status == 'completed') ? now() : null;

    return [
        'name'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
        'user' => $faker->randomElement($array = array ('Brian', 'Vern')),
        'status' => $status,
        'completed_at' => $completed_at,
    ];
});
