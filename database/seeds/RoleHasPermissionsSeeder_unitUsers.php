<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleHasPermissionsSeeder_unitUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unit1Role = Role::where('name', '=', 'UNIT USER')->first();
        $unit2Role = Role::where('name', '=', 'UNIT OPERATOR')->first();
        $unit3Role = Role::where('name', '=', 'UNIT BOSS')->first();
        $unit4Role = Role::where('name', '=', 'UNIT MANAGER')->first();

        // USERS-functionality permissions
        // basic view
        $unit1Role->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);
        $unit2Role->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);
        $unit3Role->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);
        $unit4Role->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);

        // user activate
        $unit1Role->givePermissionTo(['USERS-inactivate']);
        $unit2Role->givePermissionTo(['USERS-inactivate']);
        $unit3Role->givePermissionTo(['USERS-activate','USERS-inactivate']);
        $unit4Role->givePermissionTo(['USERS-activate','USERS-inactivate']);

        // user basic CRUD
        $unit3Role->givePermissionTo(['USERS-create','USERS-update']);
        $unit4Role->givePermissionTo(['USERS-create','USERS-update']);

        // users delete
        $unit3Role->givePermissionTo(['USERS-delete']);
        $unit4Role->givePermissionTo(['USERS-delete']);
    }
}
