<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionsSeeder_CacheCleanner::class);

        $this->call(PermissionsTableSeeder_UsersFunctionalityPermissions::class);

        $this->call(RolesTableSeeder_AllRoles::class);
        $this->call(RoleHasPermissionsSeeder_visitorUsers::class);
        $this->call(RoleHasPermissionsSeeder_auditorUsers::class);
        $this->call(RoleHasPermissionsSeeder_traineeUsers::class);
        $this->call(RoleHasPermissionsSeeder_unitUsers::class);
        $this->call(RoleHasPermissionsSeeder_unitExpedUsers::class);
        $this->call(RoleHasPermissionsSeeder_unitDistrUsers::class);
        $this->call(RoleHasPermissionsSeeder_managerUsers::class);
        $this->call(RoleHasPermissionsSeeder_systemUsers::class);

        $this->call(UsersTableSeeder::class);
    }
}
