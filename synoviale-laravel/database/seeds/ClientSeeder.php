<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder {

    /**
     * Run the database seeds.
     *ClientSeeder permet de compléter des informations relatifs à un client
     * @return void
     */
    public function run() {
        //
        DB::table('clients')->delete();

        DB::table('clients')->insert([[
            'homeCanton' => 'SO',
            'person_id' => '4',
                ],
            [
            'homeCanton' => 'SO',
            'person_id' => '5',
                ],
            [
            'homeCanton' => 'SO',
            'person_id' => '6',
                ]]);
    }

}
