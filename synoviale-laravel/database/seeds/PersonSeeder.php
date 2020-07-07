<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder {

    /**
     * Run the database seeds.
     *PersonSeeder pemret de compléter des informations relatives à une personne
     * @return void
     */
    public function run() {
        //
        DB::table('people')->delete();

        DB::table('people')->insert([[

            'name' => 'Fiechter',
            'firstname' => 'Thomas',
            'phoneNumber1' => '0794567891',
            'phoneNumber2' => '0214567892',
            'email' => 'thomasfiechter@gmail.com',
            'email2' => 'tfiechter@gmail.com',
            'comment' => 'Organisateur',
        ],
                [

            'name' => 'Veseli',
            'firstname' => 'Leandra',
            'phoneNumber1' => '0794567892',
            'phoneNumber2' => '0214567893',
            'email' => 'leandraveselir@gmail.com',
            'email2' => 'lveseli@gmail.com',
            'comment' => 'Entrepreneuse',
        ],
                [

            'name' => 'Maire',
            'firstname' => 'Maxime',
            'phoneNumber1' => '0794567894',
            'phoneNumber2' => '0214567895',
            'email' => 'maximemaire@gmail.com',
            'email2' => 'mmaire@gmail.com',
            'comment' => 'Staff Accueil',
        ],
                [

            'name' => 'Studer',
            'firstname' => 'Lola',
            'phoneNumber1' => '0794567896',
            'phoneNumber2' => '0214567897',
            'email' => 'lolastuder@gmail.com',
            'email2' => 'lstuder@gmail.com',
            'comment' => 'Cliente',
        ]]);
    }

}
