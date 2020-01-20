<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder_UsersFunctionalityPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permission::create(['name' => 'users-list']);
        Permission::create(['name' => 'users-show']);
        Permission::create(['name' => 'users-search']);
        Permission::create(['name' => 'users-create']);
        Permission::create(['name' => 'users-update']);
        Permission::create(['name' => 'users-delete']);
        Permission::create(['name' => 'users-activate']);
        Permission::create(['name' => 'users-inactivate']);

    }
}
