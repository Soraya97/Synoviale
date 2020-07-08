<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder {

    /**
     * Run the database seeds.
     *CountrySeeder permet de compléter des inforamtions relatives à un pays et une addresse
     * @return void
     */
    public function run() {
        //
        DB::table('countries')->delete();

        DB::table('countries')->insert([
            'id' => 1,
            'name' => 'Suisse'
        ]);
    }

}
