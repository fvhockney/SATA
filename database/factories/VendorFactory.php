<?php

use Faker\Generator as Faker;

$factory->define(App\Vendor::class, function (Faker $faker) {
    return [
       'company' => $faker->company,
       'contact_name' => $faker->name,
       'street' =>$faker->streetAddress,
       'city' => $faker->city,
       'zip' => $faker->postcode,
       'country'=> $faker->countryCode,
       'phone' => $faker->phoneNumber,
       'email' => $faker->safeEmail,
       'website' => $faker->domainName,
    ];
});
