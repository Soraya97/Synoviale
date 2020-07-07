<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('countries')->delete();

        DB::table('countries')->insert([
            'id' => 1,
            'name' => 'Suisse',
            'Code' => '1',
        ]);
    }

}
