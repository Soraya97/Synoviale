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

        DB::table('cities')->insert([[
           'postalCode' => '1400',
            'name' => 'Yverdon',
            'Canton' => 'Vaud',
            'country_id' =>  '1',
        ],
                [
           'postalCode' => '1815',
            'name' => 'Montreux',
            'Canton' => 'Vaud',
            'country_id' =>  '1',
        ],
                [
           'postalCode' => '1052',
            'name' => 'Le Mont',
            'Canton' => 'Vaud',
            'country_id' =>  '1',
        ],
                [
           'postalCode' => '4226',
            'name' => 'Breitenbach',
            'Canton' => 'Soleure',
            'country_id' =>  '1',
        ]]);
    }
}
