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
     * 5-system - all systems records
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
            'record_scope' => 5,
        ]);
        $systemAdmin->assignRole('system-admin');
    }

    private function createSystemManagers()
    {
        $systemOwner = User::create([
            'name'      => 'System Owner',
            'email'     => 'system-owner@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 5,
        ]);
        $systemOwner->assignRole('system-owner');
    }

    private function createAppManagers()
    {
        $appPresident = User::create([
            'name'      => 'App President',
            'email'     => 'app-president@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 4,
        ]);
        $appPresident->assignRole('users-show');
        $appPresident->assignRole('users-basic');
        $appPresident->assignRole('users-manager');

        $appDirector = User::create([
            'name'      => 'App Director',
            'email'     => 'app-director@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 4,
        ]);
        $appDirector->assignRole('users-show');
        $appDirector->assignRole('users-basic');
        $appDirector->assignRole('users-manager');

        $appNationalManager = User::create([
            'name'      => 'App National Manager',
            'email'     => 'app-national-manager@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 4,
        ]);
        $appNationalManager->assignRole('users-show');
        $appNationalManager->assignRole('users-basic');
        $appNationalManager->assignRole('users-manager');
        $appNationalManager->assignRole('users-admin');

        $appRegionalManager = User::create([
            'name'      => 'App Regional Manager',
            'email'     => 'app-regional-manager@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 5,
        ]);
        $appRegionalManager->assignRole('users-show');
        $appRegionalManager->assignRole('users-basic');
        $appRegionalManager->assignRole('users-manager');
        $appRegionalManager->assignRole('users-admin');

    }

    private function createUnitManagers()
    {
        $unitSupervisor = User::create([
            'name'      => 'Unit Supervisor',
            'email'     => 'unit-supervisor@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 3,
        ]);
        $unitSupervisor->assignRole('users-show');
        $unitSupervisor->assignRole('users-basic');
        $unitSupervisor->assignRole('users-manager');
        $unitSupervisor->assignRole('users-admin');

        $unitBoss = User::create([
            'name'      => 'Unit Boss',
            'email'     => 'unit-boss@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 3,
        ]);
        $unitBoss->assignRole('users-show');
        $unitBoss->assignRole('users-basic');
        $unitBoss->assignRole('users-manager');
        $unitBoss->assignRole('users-admin');
    }

    private function createUnitUsers()
    {
        $unitAnalist = User::create([
            'name'         => 'Unit Analist',
            'email'        => 'unit-analist@shipment.test',
            'password'     => bcrypt('password'),
            'created_at'   => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 2,
        ]);
        $unitAnalist->assignRole('users-show');
        $unitAnalist->assignRole('users-basic');

        $unitUser = User::create([
            'name'      => 'Unit User',
            'email'     => 'unit-user@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 1,
        ]);
        $unitUser->assignRole('users-show');
        $unitUser->assignRole('users-basic');

        $unitTrainee = User::create([
            'name'      => 'Unit Trainee',
            'email'     => 'unit-trainee@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 1,
        ]);
        $unitTrainee->assignRole('users-show');
    }

    private function createCommonUsers()
    {
        factory(App\Models\User::class, 200)
            ->create()
            ->assignRole('users-show')
            ->assignRole('users-basic');
    }
}
