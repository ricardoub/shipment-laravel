<?php

use Illuminate\Database\Seeder;

class RoleHasPermissionsSeeder_visitorUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $visitorRole = Role::where('name', 'VISITOR');

        // USERS functionality permissions
        $visitorRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);
    }
}
