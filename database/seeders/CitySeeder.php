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
            )
        ));
    }
}
