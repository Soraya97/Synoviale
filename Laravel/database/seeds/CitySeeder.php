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
           'postalCode' => 'Code postal' . $i,
            'name' => 'Nom' . $i,
            'Canton' => 'Canton' . $i,
            'country_id' =>  $i,
            'address_id' =>  $i,
        ]);
    }
}
