<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleHasPermissionsSeeder_unitExpedUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unitExpedIRole   = Role::where('name', '=', 'EXPEDITION I')->first();
        $unitExpedIIRole  = Role::where('name', '=', 'EXPEDITION II')->first();
        $unitExpedIIIRole = Role::where('name', '=', 'EXPEDITION III')->first();

        // USERS-functionality permissions
        $unitExpedIRole->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);

        $unitExpedIIRole->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);
        $unitExpedIIRole->givePermissionTo(['USERS-activate','USERS-inactivate']);

        $unitExpedIIIRole->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);
        $unitExpedIIIRole->givePermissionTo(['USERS-activate','USERS-inactivate']);
        $unitExpedIIIRole->givePermissionTo(['USERS-create','USERS-update']);
    }
}
