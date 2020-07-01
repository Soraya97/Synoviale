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
            'number' => '1',
            'name' => 'Fiechter',
            'firstname' => 'Thomas',
            'phoneNumber1' => '0794567891',
            'phoneNumber2' => '0214567892',
            'email1' => 'thomasfiechter@gmail.com',
            'email2' => 'tfiechter@gmail.com',
            'comment' => 'Organisateur',
            'address_id' => '1',
        ],
                [
            'number' => '2',
            'name' => 'Veseli',
            'firstname' => 'Leandra',
            'phoneNumber1' => '0794567892',
            'phoneNumber2' => '0214567893',
            'email1' => 'leandraveselir@gmail.com',
            'email2' => 'lveseli@gmail.com',
            'comment' => 'Entrepreneuse',
            'address_id' => '2',
        ],
                [
            'number' => '3',
            'name' => 'Maire',
            'firstname' => 'Maxime',
            'phoneNumber1' => '0794567894',
            'phoneNumber2' => '0214567895',
            'email1' => 'maximemaire@gmail.com',
            'email2' => 'mmaire@gmail.com',
            'comment' => 'Staff Accueil',
            'address_id' => '3',
        ],
                [
            'number' => '4',
            'name' => 'Studer',
            'firstname' => 'Lola',
            'phoneNumber1' => '0794567896',
            'phoneNumber2' => '0214567897',
            'email1' => 'lolastuder@gmail.com',
            'email2' => 'lstuder@gmail.com',
            'comment' => 'Cliente',
            'address_id' => '4',
        ]);
    }

}
