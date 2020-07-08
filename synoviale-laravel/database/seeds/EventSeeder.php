<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *EventSeederpermet de compléter le nom de l'événement
     * @return void
     */
    public function run()
    {
        //
        DB::table('events')->delete();

        DB::table('events')->insert([
           'name' => 'Bike Test Gryon',
        ]);
    }
}
