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
            'number' => 'Nombre' . $i,
            'street1' => 'Rue 1' . $i,
            'street2' => 'Rue 2' . $i,
            'streetNumber' => 'Numéro de rue' . $i,
            'POBox' => 'Boîte Postale' . $i,
            'city_id' => $i, // à vérifier
            'person_id' =>  $i, // à vérifier
            'addressType_id' =>  $i // à vérifier
        ]);
    }

}
