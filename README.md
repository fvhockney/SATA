# SATA (Super Awesome Travel Agency - a working title)

This little project is a dream that one of my friends from Tel aviv University and I have concocted. We want to share Israel (and eventually other countries) with the world in a new way -- focusing on the hidden gems and boutique experience.

This has also provided me with an opportunity to venture outside the simple web. The front end is still **HTML** and **CSS** with a little **JS** thrown in for good measure, but the back end is entirely JS (an **SPA** with **Vue**). Additionally, this is really helping me to spread my wings in **database design** and become acquainted with **integrating business rules into my design**.

The back end of the website is based on **PHP** and uses the **Laravel** framework.

You can see the front end **live** at fernweh-dev.vernhockney.space. Since my partner isn't particularly savvy in the tech field, I provide a sandbox where he can view changes and make suggestions. He can also try to break the site!! Of course, the site is not finished, so be gently if you find bugs. There is a good chance I already know about it, but have something more pressing that I am working on.

If you are interested in playing with the backend, you can clone the repo. To get started though, you need to do a little extra set up. I have removed the `UserSeeder` so that you can't acces my production/dev backend. You can, however, copy the below code into a file `database/seeds/UsersTableSeeder.php` and be good to go.

```php
<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
     *
     * @return void
    */
    public function run(){
        $user = App\User::create([
            'name' => 'Developer',
            'email' => 'developer@fernweh-dev.com',
            'title' => 'Tester',
            'password' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $user->assignRole('super-admin');
    }
}
```

then in a terminal in the project root:
```bash
composer update && composer install
npm update && install
php artisan migrate:fresh --seed
```

You can then access the backend at YOUR_LOCAL_ADDRESS/admin/login
