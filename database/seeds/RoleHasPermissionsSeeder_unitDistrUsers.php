<?php

use Illuminate\Database\Seeder;

class RoleHasPermissionsSeeder_unitDistrUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unitDistrIRole   = Role::where('name', 'DISTRIBUTION I');
        $unitDistrIIRole  = Role::where('name', 'DISTRIBUTION II');
        $unitDistrIIIRole = Role::where('name', 'DISTRIBUTION III');

        // USERS functionality permissions
        $unitIDistrRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);

        $unitDistrIIRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);
        $unitDistrIIRole->givePermissionTo(['USERS activate','USERS inactivate']);

        $unitDistrIIIRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);
        $unitDistrIIIRole->givePermissionTo(['USERS activate','USERS inactivate']);
        $unitDistrIIIRole->givePermissionTo(['USERS create','USERS update']);
    }
}
