<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleHasPermissionsSeeder_visitorUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $visitorRole = Role::where('name', '=', 'VISITOR')->first();

        // USERS-functionality permissions
        $visitorRole->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);
    }
}
