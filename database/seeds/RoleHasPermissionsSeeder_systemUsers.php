<?php

use Illuminate\Database\Seeder;

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
        $systemIRole   = Role::where('name', 'SYSTEM I');
        $systemIIRole  = Role::where('name', 'SYSTEM II');
        $systemIIIRole = Role::where('name', 'SYSTEM III');

        // ALL functionalities permissions
        $systemIRole->givePermissionTo(Permission::all());
        $systemIIRole->givePermissionTo(Permission::all());
        $systemIIIRole->givePermissionTo(Permission::all());

    }
}
