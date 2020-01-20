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
        $role = Role::create(['name' => 'users-show']);
        $role->givePermissionTo(['users-list', 'users-show', 'users-search']);

        $role = Role::create(['name' => 'users-basic']);
        $role->givePermissionTo(['users-activate','users-inactivate']);

        $role = Role::create(['name' => 'users-manager']);
        $role->givePermissionTo(['users-create','users-update']);

        $role = Role::create(['name' => 'users-admin']);
        $role->givePermissionTo(['users-delete']);

    }
}
