<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => '1',
                'name' => 'AC'
            ),
            1 =>
            array (
                'id' => '2',
                'name' => 'AL'
            ),
            2 =>
            array (
                'id' => '3',
                'name' => 'AM'
            ),
            3 =>
            array (
                'id' => '4',
                'name' => 'AP',
            ),
            4 =>
            array (
                'id' => '5',
                'name' => 'BA',
            ),
            5 =>
            array (
                'id' => '6',
                'name' => 'CE'
            ),
            6 =>
            array (
                'id' => '7',
                'name' => 'DF'
            ),
            7 =>
            array (
                'id' => '8',
                'name' => 'ES'
            ),
            8 =>
            array (
                'id' => '9',
                'name' => 'GO'
            ),
            9 =>
            array (
                'id' => '10',
                'name' => 'MA'
            ),
            10 =>
            array (
                'id' => '11',
                'name' => 'MG'
            ),
            11 =>
            array (
                'id' => '12',
                'name' => 'MS'
            ),
            12 =>
            array (
                'id' => '13',
                'name' => 'MT'
            ),
            13 =>
            array (
                'id' => '14',
                'name' => 'PA'
            ),
            14 =>
            array (
                'id' => '15',
                'name' => 'PB'
            ),
            15 =>
            array (
                'id' => '16',
                'name' => 'PE'
            ),
            16 =>
            array (
                'id' => '17',
                'name' => 'PI'
            ),
            17 =>
            array (
                'id' => '18',
                'name' => 'PR',
            ),
            18 =>
            array (
                'id' => '19',
                'name' => 'RJ'
            ),
            19 =>
            array (
                'id' => '20',
                'name' => 'RN'
            ),
            20 =>
            array (
                'id' => '21',
                'name' => 'RO'
            ),
            21 =>
            array (
                'id' => '22',
                'name' => 'RR'
            ),
            22 =>
            array (
                'id' => '23',
                'name' => 'RS'
            ),
            23 =>
            array (
                'id' => '24',
                'name' => 'SC'
            ),
            24 =>
            array (
                'id' => '25',
                'name' => 'SE'
            ),
            25 =>
            array (
                'id' => '26',
                'name' => 'SP'
            ),
            26 =>
            array (
                'id' => '27',
                'name' => 'TO'
            ),
        ));
    }
}
