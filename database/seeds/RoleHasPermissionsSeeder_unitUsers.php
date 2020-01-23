<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleHasPermissionsSeeder_unitUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unitIRole   = Role::where('name', '=', 'UNIT I')->first();
        $unitIIRole  = Role::where('name', '=', 'UNIT II')->first();
        $unitIIIRole = Role::where('name', '=', 'UNIT III')->first();

        // USERS functionality permissions
        $unitIRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);

        $unitIIRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);
        $unitIIRole->givePermissionTo(['USERS activate','USERS inactivate']);

        $unitIIIRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);
        $unitIIIRole->givePermissionTo(['USERS activate','USERS inactivate']);
        $unitIIIRole->givePermissionTo(['USERS create','USERS update']);
    }
}
