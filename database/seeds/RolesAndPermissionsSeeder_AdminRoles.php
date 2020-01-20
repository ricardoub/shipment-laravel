<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder_AdminRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // admins role and permissions
        $role = Role::create(['name' => 'system-admin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'system-owner']);
        $role->givePermissionTo(Permission::all());

    }
}
