<?php

use Illuminate\Database\Seeder;

class AddressTypeSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('addressTypes')->delete();

        DB::table('addressTypes')->insert([
            'description' => 'Description' . $i,
            'company_id' => 'company_id' . $i, // à vérifier
            'address_id' => 'address_id' . $i // à vérifier
        ]);
    }

}
