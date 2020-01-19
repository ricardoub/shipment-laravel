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
        /**
         * User functionality permissions
         *
         * Scopes:
         * 1-only own user's records
         * 2-only user's work group records
         * 3-only unit work records, and linked work groups records
         * 4-only binding unit records, and linked unit's records
         * 5-all systems records
        */

        Permission::create(['name' => 'users-list-1']);
        Permission::create(['name' => 'users-show-1']);
        Permission::create(['name' => 'users-search-1']);
        Permission::create(['name' => 'users-create-1']);
        Permission::create(['name' => 'users-update-1']);
        Permission::create(['name' => 'users-delete-1']);
        Permission::create(['name' => 'users-activate-1']);
        Permission::create(['name' => 'users-inactivate-1']);

        Permission::create(['name' => 'users-list-2']);
        Permission::create(['name' => 'users-show-2']);
        Permission::create(['name' => 'users-search-2']);
        Permission::create(['name' => 'users-create-2']);
        Permission::create(['name' => 'users-update-2']);
        Permission::create(['name' => 'users-delete-2']);
        Permission::create(['name' => 'users-activate-2']);
        Permission::create(['name' => 'users-inactivate-2']);

        Permission::create(['name' => 'users-list-3']);
        Permission::create(['name' => 'users-show-3']);
        Permission::create(['name' => 'users-search-3']);
        Permission::create(['name' => 'users-create-3']);
        Permission::create(['name' => 'users-update-3']);
        Permission::create(['name' => 'users-delete-3']);
        Permission::create(['name' => 'users-activate-3']);
        Permission::create(['name' => 'users-inactivate-3']);

        Permission::create(['name' => 'users-list-4']);
        Permission::create(['name' => 'users-show-4']);
        Permission::create(['name' => 'users-search-4']);
        Permission::create(['name' => 'users-create-4']);
        Permission::create(['name' => 'users-update-4']);
        Permission::create(['name' => 'users-delete-4']);
        Permission::create(['name' => 'users-activate-4']);
        Permission::create(['name' => 'users-inactivate-4']);

        Permission::create(['name' => 'users-list-5']);
        Permission::create(['name' => 'users-show-5']);
        Permission::create(['name' => 'users-search-5']);
        Permission::create(['name' => 'users-create-5']);
        Permission::create(['name' => 'users-update-5']);
        Permission::create(['name' => 'users-delete-5']);
        Permission::create(['name' => 'users-activate-5']);
        Permission::create(['name' => 'users-inactivate-5']);



    }
}
