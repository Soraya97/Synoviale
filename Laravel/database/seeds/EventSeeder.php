<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('events')->delete();

        DB::table('events')->insert([
           'name' => 'Nom' . 'Bike Test gryon',
            'edition_id' =>  '2020',
        ]);
    }
}
