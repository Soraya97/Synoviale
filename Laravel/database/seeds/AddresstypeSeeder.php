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
            'description' => 'Description' . $i,
            'company_id' => $i,
            'address_id' => $i
        ]);
    }

}
