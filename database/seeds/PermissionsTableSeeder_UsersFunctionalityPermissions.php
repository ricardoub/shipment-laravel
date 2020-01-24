<?php

use Illuminate\Database\Seeder;
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

        Permission::create(['name' => 'USERS-list']);
        Permission::create(['name' => 'USERS-show']);
        Permission::create(['name' => 'USERS-search']);
        Permission::create(['name' => 'USERS-create']);
        Permission::create(['name' => 'USERS-update']);
        Permission::create(['name' => 'USERS-delete']);
        Permission::create(['name' => 'USERS-activate']);
        Permission::create(['name' => 'USERS-inactivate']);

    }
}
