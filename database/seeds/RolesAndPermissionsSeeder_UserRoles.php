<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder_UserRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Scopes:
         * 1-only own user's records
         * 2-only user's work group records
         * 3-only unit work records, and linked work groups records
         * 4-only binding unit records, and linked unit's records
         * 5-all systems records
         */

        // user role and permissions
        $role = Role::create(['name' => 'user-own']);
        $role->givePermissionTo(['users-list-1', 'users-show-1', 'users-search-1']);
        $role->givePermissionTo(['users-update-1','users-activate-1','users-inactivate-1']);

        $role = Role::create(['name' => 'user-group']);
        $role->givePermissionTo(['users-list-2', 'users-show-2', 'users-search-2']);
        $role->givePermissionTo(['users-update-2','users-activate-2','users-inactivate-2']);

        $role = Role::create(['name' => 'user-unit']);
        $role->givePermissionTo(['users-list-3', 'users-show-3', 'users-search-3']);
        $role->givePermissionTo(['users-create-3','users-update-3','users-delete-3']);
        $role->givePermissionTo(['users-activate-3','users-inactivate-3']);

        $role = Role::create(['name' => 'user-manager']);
        $role->givePermissionTo(['users-list-4', 'users-show-4', 'users-search-4']);
        $role->givePermissionTo(['users-create-4','users-update-4','users-delete-4']);
        $role->givePermissionTo(['users-activate-4','users-inactivate-4']);

        $role = Role::create(['name' => 'user-admin']);
        $role->givePermissionTo(['users-list-5', 'users-show-5', 'users-search-5']);
        $role->givePermissionTo(['users-create-5','users-update-5','users-delete-5']);
        $role->givePermissionTo(['users-activate-5','users-inactivate-5']);

    }
}
