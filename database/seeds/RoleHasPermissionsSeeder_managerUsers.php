<?php

use Illuminate\Database\Seeder;

class RoleHasPermissionsSeeder_managerUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $managerIRole   = Role::where('name', 'MANAGER I');
        $managerIIRole  = Role::where('name', 'MANAGER II');
        $managerIIIRole = Role::where('name', 'MANAGER III');

        // USERS functionality permissions
        $managerIRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);
        $managerIRole->givePermissionTo(['USERS activate','USERS inactivate']);
        $managerIRole->givePermissionTo(['USERS create','USERS update']);

        $managerIIRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);
        $managerIIRole->givePermissionTo(['USERS activate','USERS inactivate']);
        $managerIIRole->givePermissionTo(['USERS create','USERS update', 'USERS delete']);

        $managerIRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);
        $managerIRole->givePermissionTo(['USERS activate','USERS inactivate']);
        $managerIRole->givePermissionTo(['USERS create','USERS update', 'USERS delete']);

    }
}
