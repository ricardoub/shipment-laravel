<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleHasPermissionsSeeder_systemUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $system1Role = Role::where('name', '=', 'SYSTEM OPERATOR')->first();
        $system2Role = Role::where('name', '=', 'SYSTEM ADMINISTRATOR')->first();

        // ALL functionalities permissions
        $system1Role->givePermissionTo(Permission::all());
        $system2Role->givePermissionTo(Permission::all());

    }
}
