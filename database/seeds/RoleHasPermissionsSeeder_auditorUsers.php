<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleHasPermissionsSeeder_auditorUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $auditorRole = Role::where('name', '=', 'AUDITOR')->first();

        // USERS-functionality permissions
        $auditorRole->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);
    }
}
