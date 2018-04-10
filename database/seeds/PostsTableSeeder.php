<?php

use Illuminate\Database\Seeder;


class PostsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    factory(App\Post::class, 50)
    ->create()
    ->each(function($p){
      $faker = Faker\Factory::create();
      $p->tags()->sync($faker->randomElements($array = array(1,2,3,4,5,6,7,8,9,10), $count = 4));
    });
  }

}
