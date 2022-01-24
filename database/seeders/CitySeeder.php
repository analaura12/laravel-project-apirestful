<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cities')->insert(array (
            0 =>
            array (
                'id' => '1',
                'name' => 'São Paulo'
            ),
            1 =>
            array (
                'id' => '2',
                'name' => 'Santa Isabel'
            ),
            2 =>
            array (
                'id' => '3',
                'name' => 'Arujá'
            ),
            3 =>
            array (
                'id' => '4',
                'name' => 'Mogi das Cruzes'
            ),
            4 =>
            array (
                'id' => '5',
                'name' => 'Guarulhos'
            )
        ));
    }
}
