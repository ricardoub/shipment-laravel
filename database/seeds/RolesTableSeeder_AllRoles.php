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
        Role::create(['name' => 'VISITOR']);
        Role::create(['name' => 'AUDITOR']);
        Role::create(['name' => 'TRAINEE']);

        Role::create(['name' => 'UNIT I']);
        Role::create(['name' => 'UNIT II']);
        Role::create(['name' => 'UNIT III']);

        Role::create(['name' => 'EXPEDITION I']);
        Role::create(['name' => 'EXPEDITION II']);
        Role::create(['name' => 'EXPEDITION III']);

        Role::create(['name' => 'DISTRIBUTION I']);
        Role::create(['name' => 'DISTRIBUTION II']);
        Role::create(['name' => 'DISTRIBUTION III']);

        Role::create(['name' => 'MANAGER I']);
        Role::create(['name' => 'MANAGER II']);
        Role::create(['name' => 'MANAGER III']);

        Role::create(['name' => 'SYSTEM I']);
        Role::create(['name' => 'SYSTEM II']);
        Role::create(['name' => 'SYSTEM III']);
    }
}
