<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => '1',
                'name' => 'Ana Laura', 
                'email' => 'ana@gmail.com',
                'age' => 20,
                'city_id' => 1,
                'state_id' => 1,
                'address_id' => 1
            ), 
            1 =>
            array (
                'id' => '2',
                'name' => 'Luiz', 
                'email' => 'luiz@gmail.com',
                'age' => 30,
                'city_id' => 2,
                'state_id' => 2,
                'address_id' => 1
            ), 
            2 => 
            array (
                'id' => '3',
                'name' => 'Lucas', 
                'email' => 'Lucas@gmail.com',
                'age' => 54,
                'city_id' => 3,
                'state_id' => 3,
                'address_id' => 1
            ), 
            3 => 
            array (
                'id' => '4',
                'name' => 'Maria', 
                'email' => 'maria@gmail.com',
                'age' => 54,
                'city_id' => 4,
                'state_id' => 4,
                'address_id' => 1
            ), 
            4 =>
            array (
                'id' => '5',
                'name' => 'Isabela', 
                'email' => 'isabela@gmail.com',
                'age' => 44,
                'city_id' => 5,
                'state_id' => 5,
                'address_id' => 1
            ), 
        ));
    }
}
