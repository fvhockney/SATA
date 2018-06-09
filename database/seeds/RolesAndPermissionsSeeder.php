<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //Flush Cache
        app()['cache']->forget('spatie.permission.cache');

        //Create Permissions

        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'create articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);
        Permission::create(['name' => 'delete articles']);

        //Create Roles and Assign Permissions
        Role::create(['name' => 'super-admin'])
        ->givePermissionTo(Permission::all());
    }
}
