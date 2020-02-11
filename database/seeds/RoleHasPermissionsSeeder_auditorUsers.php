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
        $auditor1Role = Role::where('name', '=', 'SYSTEM AUDITOR')->first();

        // USERS-functionality permissions
        $auditor1Role->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);
    }
}
