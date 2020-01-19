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
        $this->call(RolesAndPermissionsSeeder_AdminRoles::class);
        $this->call(RolesAndPermissionsSeeder_UserRoles::class);
        $this->call(UsersTableSeeder::class);
    }
}
