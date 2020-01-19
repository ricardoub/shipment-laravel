<?php

use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder_CacheCleanner extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

    }
}
