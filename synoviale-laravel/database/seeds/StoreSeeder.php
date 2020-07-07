<?php

use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *StoreSeeder permet d'attribuer l'entreprise à une personne
     * @return void
     */
    public function run()
    {
        //
        DB::table('stores')->delete();

        DB::table('stores')->insert([
            'person_id' => '2',
                ]);
    }
}
