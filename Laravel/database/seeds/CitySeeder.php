<?php

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
        //
        DB::table('cities')->delete();

        DB::table('cities')->insert([
           'postalCode' => 'Code postal 1008',
            'name' => 'Lausanne',
            'Canton' => 'Canton' . 'Vaud',
            'country_id' =>  '0041',
        ]);
    }
}
