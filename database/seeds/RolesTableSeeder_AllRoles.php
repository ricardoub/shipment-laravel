<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder_AllRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'SYSTEM ADMINISTRATOR']);
        Role::create(['name' => 'SYSTEM OPERATOR']);
        Role::create(['name' => 'SYSTEM AUDITOR']);

        Role::create(['name' => 'COMPANY DIRECTOR']);
        Role::create(['name' => 'COMPANY PRESIDENT']);
        Role::create(['name' => 'COMPANY MANAGER']);
        Role::create(['name' => 'COMPANY SUPERVISOR']);

        Role::create(['name' => 'LOGISTIC MANAGER']);
        Role::create(['name' => 'LOGISTIC BOSS']);
        Role::create(['name' => 'LOGISTIC OPERATOR']);
        Role::create(['name' => 'LOGISTIC USER']);

        Role::create(['name' => 'UNIT MANAGER']);
        Role::create(['name' => 'UNIT BOSS']);
        Role::create(['name' => 'UNIT OPERATOR']);
        Role::create(['name' => 'UNIT USER']);

    }
}
