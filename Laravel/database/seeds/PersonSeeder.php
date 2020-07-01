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
            'number' => 'Nombre' . '89',
            'name' => 'Nom' . 'Sanchez',
            'firstname' => 'Prénom' . 'Maria-Victoria',
            'phoneNumber1' => 'Numéro de téléphone 1' . '0794567891',
            'phoneNumber2' => 'Numéro de téléphone 2' . '0214567892',
            'email1' => 'email 1' . 'mvs@gmail.com',
            'email2' => 'email 2' . 'mariav@gmail.com',
            'comment' => 'Commentaire' . 'trop cool',
            'address_id' => '03',
        ]);
    }

}
