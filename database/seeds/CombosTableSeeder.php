<?php

use Illuminate\Database\Seeder;

class CombosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('combos')->delete();

        $yesno = [
            [
                'type'   => 'yesno',
                'order'  => '0',
                'value'  => '0',
                'option' => 'Selecione...'
            ],
            [
                'type'   => 'yesno',
                'order'  => '1',
                'value'  => '1',
                'option' => 'Sim'
            ],
            [
                'type'   => 'yesno',
                'order'  => '2',
                'value'  => '2',
                'option' => 'Não'
            ],
        ];

        DB::table('combos')->insert($yesno);

        $scope = [
            [   'option' => 'Blocked access',
                'type'   => 'scope',
                'order'  => '1',
                'value'  => '1',
            ],
            [   'option' => 'OWN records',
                'type'   => 'scope',
                'order'  => '2',
                'value'  => '2',
            ],
            [   'option' => 'WORK GROUP records',
                'type'   => 'scope',
                'order'  => '3',
                'value'  => '3',
            ],
            [   'option' => 'UNIT WORK records',
                'type'   => 'scope',
                'order'  => '4',
                'value'  => '4',
            ],
            [   'option' => 'LINKED UNITS records',
                'type'   => 'scope',
                'order'  => '5',
                'value'  => '5',
            ],
            [   'option' => 'MANAGERS records',
                'type'   => 'scope',
                'order'  => '6',
                'value'  => '6',
            ],
            [   'option' => 'COMPANIES records',
                'type'   => 'scope',
                'order'  => '7',
                'value'  => '7',
            ],
            [   'option' => 'ALL auditor records',
                'type'   => 'scope',
                'order'  => '8',
                'value'  => '8',
            ],
            [   'option' => 'ALL system records',
                'type'   => 'scope',
                'order'  => '9',
                'value'  => '9',
            ]
        ];

        DB::table('combos')->insert($scope);

    }
}

