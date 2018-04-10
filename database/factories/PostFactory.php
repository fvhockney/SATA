<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Post::class, function (Faker $faker) {

  $author = $faker->optional(0.5)->name;
  $authorEmail = $author ? $faker->safeEmail : null;
    return [
        'user_id'=>1,
        'author'=>$author,
        'author_email'=>$authorEmail,
        'title'=> $faker->text($MaxNbChars = 50),
        'subtitle'=>$faker->text($MaxNbChars = 50),
        'slug'=>$faker->unique()->text($MaxNbChars=25),
        'content'=>$faker->paragraphs($nb=5, $asText=true),
        'display_img'=>$faker->imageUrl($width = 150, $height = 150, 'cats', true, 'Faker'),
        'created_at'=>$faker->dateTimeThisDecade($max='now', $timezone = null)
    ];
});
