<?php

use Faker\Generator as Faker;

$factory->define(App\Dish::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'type' => $faker->randomElement(array('halal', 'kosher', 'vegetarian')),
        'price' => $faker->randomFloat(2, 0, 75),
    ];
});
