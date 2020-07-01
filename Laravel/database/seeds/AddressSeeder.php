<?php

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('addresses')->delete();
        DB::table('addresses')->insert([
            'number' => '01',
            'street1' => 'Rue des Paquis 29',
            'street2' => 'Rue des Grison 23',
            'streetNumber' => '8A',
            'POBox' => 'CP324',
            'city_id' => '384920', 
            'person_id' =>  '0998767', 
            'addressType_id' =>  '302', 
        ]);
    }

}
