<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleHasPermissionsSeeder_logisticUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logistic1Role = Role::where('name', '=', 'LOGISTIC USER')->first();
        $logistic2Role = Role::where('name', '=', 'LOGISTIC OPERATOR')->first();
        $logistic3Role = Role::where('name', '=', 'LOGISTIC BOSS')->first();
        $logistic4Role = Role::where('name', '=', 'LOGISTIC MANAGER')->first();

        // USERS-functionality permissions
        // basic view
        $logistic1Role->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);
        $logistic2Role->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);
        $logistic3Role->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);
        $logistic4Role->givePermissionTo(['USERS-list', 'USERS-show', 'USERS-search']);

        // user activate
        $logistic1Role->givePermissionTo(['USERS-inactivate']);
        $logistic2Role->givePermissionTo(['USERS-inactivate']);
        $logistic3Role->givePermissionTo(['USERS-activate','USERS-inactivate']);
        $logistic4Role->givePermissionTo(['USERS-activate','USERS-inactivate']);

        // user basic CRUD
        $logistic3Role->givePermissionTo(['USERS-create','USERS-update']);
        $logistic4Role->givePermissionTo(['USERS-create','USERS-update']);

        // users delete
        $logistic3Role->givePermissionTo(['USERS-delete']);
        $logistic4Role->givePermissionTo(['USERS-delete']);
    }
}
