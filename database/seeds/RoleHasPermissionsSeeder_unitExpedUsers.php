<?php

use Illuminate\Database\Seeder;

class RoleHasPermissionsSeeder_unitExpedUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unitExpedIRole   = Role::where('name', 'EXPEDITION I');
        $unitExpedIIRole  = Role::where('name', 'EXPEDITION II');
        $unitExpedIIIRole = Role::where('name', 'EXPEDITION III');

        // USERS functionality permissions
        $unitIExpedRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);

        $unitExpedIIRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);
        $unitExpedIIRole->givePermissionTo(['USERS activate','USERS inactivate']);

        $unitExpedIIIRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);
        $unitExpedIIIRole->givePermissionTo(['USERS activate','USERS inactivate']);
        $unitExpedIIIRole->givePermissionTo(['USERS create','USERS update']);
    }
}
