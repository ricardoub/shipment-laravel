<?php

use Illuminate\Database\Seeder;

class RoleHasPermissionsSeeder_auditorUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $auditorRole = Role::where('name', 'AUDITOR');

        // USERS functionality permissions
        $auditorRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);
    }
}
