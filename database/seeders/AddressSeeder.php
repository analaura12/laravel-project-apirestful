<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('addresses')->insert(array (
            0 =>
            array (
                'id' => '1',
                'street' => 'Alameda Jaú',
                'neighborhood' => 'Jardim Paulista',
                'number' => '48'
            )
        ));
    }
}
