<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleHasPermissionsSeeder_managerUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $managerIRole   = Role::where('name', '=', 'MANAGER I')->first();
        $managerIIRole  = Role::where('name', '=', 'MANAGER II')->first();
        $managerIIIRole = Role::where('name', '=', 'MANAGER III')->first();

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
