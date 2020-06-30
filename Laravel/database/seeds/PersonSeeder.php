<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('people')->delete();

        DB::table('people')->insert([
            'number' => 'Nombre' . $i,
            'name' => 'Nom' . $i,
            'firstname' => 'Prénom' . $i,
            'phonenumber1' => 'Numéro de téléphone 1' . $i,
            'phonenumber2' => 'Numéro de téléphone 2' . $i,
            'email1' => 'email 1' . $i,
            'email2' => 'email 2' . $i,
            'comment' => 'Commentaire' . $i,
            'address_id' => $i,
            'contact_id' => $i,
            'client_id' => $i,
            'staff_id' => $i,
        ]);
    }

}
