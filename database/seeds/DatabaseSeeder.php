<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          TagsTableSeeder::class,
          PostsTableSeeder::class,
          RolesAndPermissionsSeeder::class,
          UsersTableSeeder::class,
          TodoTableSeeder::class,
          RestaurantsTableSeeder::class,
          AttractionsTableSeeder::class,
          ToursTableSeeder::class,
          TransportsTableSeeder::class,
          HotelsTableSeeder::class,
        ]);
    }
}
