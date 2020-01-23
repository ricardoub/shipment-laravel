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
        $systemIRole   = Role::where('name', '=', 'SYSTEM I')->first();
        $systemIIRole  = Role::where('name', '=', 'SYSTEM II')->first();
        $systemIIIRole = Role::where('name', '=', 'SYSTEM III')->first();

        // ALL functionalities permissions
        $systemIRole->givePermissionTo(Permission::all());
        $systemIIRole->givePermissionTo(Permission::all());
        $systemIIIRole->givePermissionTo(Permission::all());

    }
}
