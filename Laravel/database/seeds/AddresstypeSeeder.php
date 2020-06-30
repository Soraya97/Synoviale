<?php

use Illuminate\Database\Seeder;

class AddresstypeSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('addresstypes')->delete();
        DB::table('addresstypes')->insert([
            'description' => 'Description très belle',
            'company_id' => '0978',
            'address_id' => '0643',
        ]);
    }

}
