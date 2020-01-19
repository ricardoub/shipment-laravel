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
     *
     * admin        - administrador
     * president    - presidente
     * director     - diretor
     * manager      - gerente
     * supervisor   - supervisor /
     * boos         - chefe
     * analyst      - analista
     * user         - usuário
     * trainee      - assistente
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
        ]);
        $systemAdmin->assignRole('system-admin');
    }
    private function createSystemManagers()
    {
        $systemManager = User::create([
            'name'      => 'System Manager',
            'email'     => 'system-manager@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        $systemManager->assignRole('user-admin');
    }
    private function createAppManagers()
    {
        $appPresident = User::create([
            'name'      => 'App President',
            'email'     => 'app-president@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        $appPresident->assignRole('user-manager');

        $appDirector = User::create([
            'name'      => 'App Director',
            'email'     => 'app-director@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        $appDirector->assignRole('user-manager');

        $appManager = User::create([
            'name'      => 'App Manager',
            'email'     => 'app-manager@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        $appManager->assignRole('user-manager');
    }

    private function createUnitManagers()
    {
        $unitSupervisor = User::create([
            'name'      => 'Unit Supervisor',
            'email'     => 'unit-supervisor@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        $unitSupervisor->assignRole('user-unit');

        $unitBoss = User::create([
            'name'      => 'Unit Boss',
            'email'     => 'unit-boss@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        $unitBoss->assignRole('user-unit');
    }

    private function createUnitUsers()
    {
        $unitAnalist = User::create([
            'name'      => 'Unit Analist',
            'email'     => 'unit-analist@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        $unitAnalist->assignRole('user-group');

        $unitUser = User::create([
            'name'      => 'Unit User',
            'email'     => 'unit-user@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        $unitUser->assignRole('user-own');

        $unitTrainee = User::create([
            'name'      => 'Unit Trainee',
            'email'     => 'unit-trainee@shipment.test',
            'password'  => bcrypt('password'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        $unitTrainee->assignRole('user-own');

    }
    private function createCommonUsers()
    {
        factory(App\Models\User::class, 200)
            ->create()
            ->assignRole('user-own');

    }
}
