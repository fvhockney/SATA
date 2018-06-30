<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => 'Brian Spencer',
        'email' => 'brianspencer@fernweh-dev.com',
        'title' => 'Co-founder',
        'password' => bcrypt('password'),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
