<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleHasPermissionsSeeder_companyUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company1Role = Role::where('name', '=', 'COMPANY SUPERVISOR')->first();
        $company2Role = Role::where('name', '=', 'COMPANY MANAGER')->first();
        $company3Role = Role::where('name', '=', 'COMPANY DIRECTOR')->first();
        $company4Role = Role::where('name', '=', 'COMPANY PRESIDENT')->first();

        // USERS-functionality permissions
        // basic view
        $company1Role->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);
        $company2Role->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);
        $company3Role->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);
        $company4Role->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);

        // user activate
        $company1Role->givePermissionTo(['USERS-activate','USERS-inactivate']);
        $company2Role->givePermissionTo(['USERS-activate','USERS-inactivate']);
        $company3Role->givePermissionTo(['USERS-activate','USERS-inactivate']);
        $company4Role->givePermissionTo(['USERS-activate','USERS-inactivate']);

        // user basic CRUD
        $company1Role->givePermissionTo(['USERS-create','USERS-update']);
        $company2Role->givePermissionTo(['USERS-create','USERS-update']);
        $company3Role->givePermissionTo(['USERS-create','USERS-update']);
        $company4Role->givePermissionTo(['USERS-create','USERS-update']);

        // users delete
        $company1Role->givePermissionTo(['USERS-delete']);
        $company2Role->givePermissionTo(['USERS-delete']);
        $company3Role->givePermissionTo(['USERS-delete']);
        $company4Role->givePermissionTo(['USERS-delete']);

    }
}
