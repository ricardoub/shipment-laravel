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

        $this->call(CombosTableSeeder::class);

        $this->call(PermissionsTableSeeder_UsersFunctionalityPermissions::class);

        $this->call(RolesTableSeeder_AllRoles::class);
        $this->call(RoleHasPermissionsSeeder_systemUsers::class);
        $this->call(RoleHasPermissionsSeeder_auditorUsers::class);
        $this->call(RoleHasPermissionsSeeder_companyUsers::class);
        $this->call(RoleHasPermissionsSeeder_logisticUsers::class);
        $this->call(RoleHasPermissionsSeeder_unitUsers::class);

        $this->call(UsersTableSeeder::class);

    }
}
