<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleHasPermissionsSeeder_unitDistrUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unitDistrIRole   = Role::where('name', '=', 'DISTRIBUTION I')->first();
        $unitDistrIIRole  = Role::where('name', '=', 'DISTRIBUTION II')->first();
        $unitDistrIIIRole = Role::where('name', '=', 'DISTRIBUTION III')->first();

        // USERS functionality permissions
        $unitDistrIRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);

        $unitDistrIIRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);
        $unitDistrIIRole->givePermissionTo(['USERS activate','USERS inactivate']);

        $unitDistrIIIRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);
        $unitDistrIIIRole->givePermissionTo(['USERS activate','USERS inactivate']);
        $unitDistrIIIRole->givePermissionTo(['USERS create','USERS update']);
    }
}
