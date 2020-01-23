<?php

use Illuminate\Database\Seeder;

class RoleHasPermissionsSeeder_traineeUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $traineeRole = Role::where('name', 'TRAINEE');

        // USERS functionality permissions
        $traineeRole->givePermissionTo(['USERS list', 'USERS show', 'USERS search']);
    }
}
