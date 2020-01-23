<?php

use Illuminate\Database\Seeder;
Use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /**
     * system-admin - administrador
     * president    - presidente
     * director     - diretor
     * manager      - gerente
     * supervisor   - supervisor
     * boss         - chefe
     * analyst      - analista
     * user         - usuário
     * trainee      - assistente
     *
     * record_scopes:
     *
     * 0-blocked
     * 1-own    - only own user's records
     * 2-group  - only user's work group records
     * 3-unit   - only unit work records, and linked work groups records
     * 4-linked - only binding unit records, and linked unit's records
     * 5-all    - all systems records
    */


    public function run()
    {
        DB::table('users')->delete();

        // have all the permissions on the entire system
        // scope: 5-all systems records
        $this->createSystemAdmins();

        // has admin permissions only on the features
        // scope: 5-all systems records
        $this->createSystemManagers();

        // has manager permissions on the features
        // scope: 4-only binding unit records, and linked unit's records
        $this->createAppManagers();

        $this->createUnitManagers();
        $this->createUnitUsers();

    }

    private function createSystemAdmins()
    {
        $systemAdmin = User::create([
            'name'      => 'System Admin',
            'email'     => 'system-admin@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 'ALL',
        ]);
        $systemAdmin->assignRole('SYSTEM III');
    }

    private function createSystemManagers()
    {
        $systemOwner = User::create([
            'name'      => 'System Owner',
            'email'     => 'system-owner@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 'ALL',
        ]);
        $systemOwner->assignRole('SYSTEM II');

        $systemOperator = User::create([
            'name'      => 'System Operator',
            'email'     => 'system-operator@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 'ALL',
        ]);
        $systemOperator->assignRole('SYSTEM I');
    }

    private function createAppManagers()
    {
        $appPresident = User::create([
            'name'      => 'App President',
            'email'     => 'app-president@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 'ALL',
        ]);
        $appPresident->assignRole('MANAGER III');

        $appDirector = User::create([
            'name'      => 'App Director',
            'email'     => 'app-director@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 'LINKED',
        ]);
        $appDirector->assignRole('MANAGER II');

        $appNationalManager = User::create([
            'name'      => 'App National Manager',
            'email'     => 'app-national-manager@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 'LINKED',
        ]);
        $appNationalManager->assignRole('MANAGER II');

        $appRegionalManager = User::create([
            'name'      => 'App Regional Manager',
            'email'     => 'app-regional-manager@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 'LINKED',
        ]);
        $appRegionalManager->assignRole('MANAGER I');

    }

    private function createUnitManagers()
    {
        $unitSupervisor = User::create([
            'name'      => 'Unit Supervisor',
            'email'     => 'unit-supervisor@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 'UNIT',
        ]);
        $unitSupervisor->assignRole('UNIT III');

        $unitBoss = User::create([
            'name'      => 'Unit Boss',
            'email'     => 'unit-boss@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 'UNIT',
        ]);
        $unitBoss->assignRole('UNIT III');
    }

    private function createUnitUsers()
    {
        $unitAnalist = User::create([
            'name'         => 'Unit Analist',
            'email'        => 'unit-analist@shipment.test',
            'password'     => bcrypt('password'),
            'created_at'   => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 'UNIT',
        ]);
        $unitAnalist->assignRole('UNIT II');

        $unitUser = User::create([
            'name'      => 'Unit User',
            'email'     => 'unit-user@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 'UNIT',
        ]);
        $unitUser->assignRole('UNIT I');

        $unitTrainee = User::create([
            'name'      => 'Unit Trainee',
            'email'     => 'unit-trainee@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 'GROUP',
        ]);
        $unitTrainee->assignRole('TRAINEE');
    }

    private function createCommonUsers()
    {
        factory(App\Models\User::class, 200)
            ->create()
            ->assignRole('UNIT I');
    }
}
