<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleHasPermissionsSeeder_traineeUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $traineeRole = Role::where('name', '=', 'TRAINEE')->first();

        // USERS-functionality permissions
        $traineeRole->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);
    }
}
