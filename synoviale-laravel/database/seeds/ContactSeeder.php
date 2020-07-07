<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *ContactSeeder permet de compléter des informations relatives à une personnes de contact d'uen entrerpise
     * @return void
     */
    public function run()
    {
        //
        DB::table('contacts')->delete();

        DB::table('contacts')->insert([
           'since' => '03.10.2020',
            'until' => '04.10.2020',
            'person_id' => '2',
            'company_id' => '1',
        ]);
        
    }
}
