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
        factory(App\Vendor::class, 3)->create();
        factory(App\Hotel::class, 5)->create()->each(function ($h) {
            $service = new App\Service();
            $h->service()->save($service);
        });
        $this->call([
          TagsTableSeeder::class,
          PostsTableSeeder::class,
          RolesAndPermissionsSeeder::class,
          UsersTableSeeder::class,
          TodoTableSeeder::class,
        ]);
    }
}
