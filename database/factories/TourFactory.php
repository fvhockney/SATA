<?php

use Faker\Generator as Faker;

$factory->define(App\Tour::class, function (Faker $faker) {
    return [
	    'name'=>$faker->word
    ];
});
