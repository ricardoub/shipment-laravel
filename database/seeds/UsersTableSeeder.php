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
     * system roles
     *
     * SYSTEM ADMINISTRATOR
     * SYSTEM OPERATOR
     * SYSTEM AUDITOR
     * COMPANY PRESIDENT
     * COMPANY DIRECTOR
     * COMPANY MANAGER
     * COMPANY SUPERVISOR
     * LOGISTIC MANAGER
     * LOGISTIC BOSS
     * LOGISTIC OPERATOR
     * LOGISTIC USER
     * UNIT MANAGER
     * UNIT BOSS
     * UNIT OPERATOR
     * UNIT USER
     *
     *
     * record_scopes:
     *
     * const BLOCKED = 1;
     * const OWN     = 2;
     * const GROUP   = 3;
     * const UNIT    = 4;
     * const LINKED  = 5;
     * const MANAGER = 6;
     * const COMPANY = 7;
     * const AUDITOR = 8;
     * const SYSTEM  = 9;
    */


    public function run()
    {
        DB::table('users')->delete();

        $this->createSystemAdmins();
        $this->createSystemAuditors();

        $this->createCompanyBoard();
        $this->createCompanyManagers();

        $this->createLogisticManagers();
        $this->createLogisticOperators();

        $this->createUnitManagers();
        $this->createUnitOperators();

        $this->createUnitUsers();

    }

    private function createSystemAdmins()
    {
        $systemAdmin = User::create([
            'name'      => 'System Admin',
            'email'     => 'system-admin@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '9',
        ]);
        $systemAdmin->assignRole('SYSTEM ADMINISTRATOR');

        $systemOwner = User::create([
            'name'      => 'System Owner',
            'email'     => 'system-owner@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '9',
        ]);
        $systemOwner->assignRole('SYSTEM OPERATOR');

        $systemOperator = User::create([
            'name'      => 'System Operator',
            'email'     => 'system-operator@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '9',
        ]);
        $systemOperator->assignRole('SYSTEM OPERATOR');

    }

    private function createSystemAuditors()
    {
        $systemAuditor = User::create([
            'name'      => 'System Auditor',
            'email'     => 'system-auditor@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '8',
        ]);
        $systemAuditor->assignRole('SYSTEM AUDITOR');
    }

    private function createCompanyBoard()
    {
        $companyPresident = User::create([
            'name'      => 'Company President',
            'email'     => 'company-president@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '7',
        ]);
        $companyPresident->assignRole('COMPANY PRESIDENT');

        $companyDirector = User::create([
            'name'      => 'Company Director',
            'email'     => 'company-director@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '7',
        ]);
        $companyDirector->assignRole('COMPANY DIRECTOR');

    }

    private function createCompanyManagers()
    {
        $companyNationalManager = User::create([
            'name'      => 'Company National Manager',
            'email'     => 'company-national-manager@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '7',
        ]);
        $companyNationalManager->assignRole('COMPANY MANAGER');

        $companyRegionalManager = User::create([
            'name'      => 'Company Regional Manager',
            'email'     => 'company-regional-manager@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '6',
        ]);
        $companyRegionalManager->assignRole('COMPANY MANAGER');

        $companyNationalSupervisor = User::create([
            'name'      => 'Company National Supervisor',
            'email'     => 'company-national-supervisor@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '6',
        ]);
        $companyNationalSupervisor->assignRole('COMPANY SUPERVISOR');

        $companyRegionalSupervisor = User::create([
            'name'      => 'Company Regional Supervisor',
            'email'     => 'company-regional-supervisor@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '5',
        ]);
        $companyRegionalSupervisor->assignRole('COMPANY SUPERVISOR');

    }

    private function createLogisticManagers()
    {
        $logisticManager = User::create([
            'name'      => 'Logistic Manager',
            'email'     => 'logistic-manager@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '5',
        ]);
        $logisticManager->assignRole('LOGISTIC MANAGER');

        $logisticBoss = User::create([
            'name'      => 'Logistic Boss',
            'email'     => 'logistic-boss@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '5',
        ]);
        $logisticBoss->assignRole('LOGISTIC BOSS');
    }

    private function createLogisticOperators()
    {
        $logisticOperator = User::create([
            'name'      => 'Logistic Operator',
            'email'     => 'logistic-operator@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '5',
        ]);
        $logisticOperator->assignRole('LOGISTIC OPERATOR');

        $logisticUser = User::create([
            'name'      => 'Logistic User',
            'email'     => 'logistic-user@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '4',
        ]);
        $logisticUser->assignRole('LOGISTIC USER');

    }

    private function createUnitManagers()
    {
        $unitManager = User::create([
            'name'      => 'Unit Manager',
            'email'     => 'unit-manager@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '4',
        ]);
        $unitManager->assignRole('UNIT MANAGER');

        $unitBoss = User::create([
            'name'      => 'Unit Boss',
            'email'     => 'unit-boss@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '4',
        ]);
        $unitBoss->assignRole('UNIT BOSS');
    }

    private function createUnitOperators()
    {
        $unitOperator = User::create([
            'name'         => 'Unit Operator',
            'email'        => 'unit-operator@shipment.test',
            'password'     => bcrypt('password'),
            'created_at'   => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => '4',
        ]);
        $unitOperator->assignRole('UNIT OPERATOR ');

        $unitUser = User::create([
            'name'      => 'Unit User',
            'email'     => 'unit-user@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'record_scope' => 'UNIT',
        ]);
        $unitUser->assignRole('UNIT USER');
    }

    private function createCommonUsers()
    {
        factory(App\Models\User::class, 200)
            ->create()
            ->assignRole('UNIT USER');
    }
}
