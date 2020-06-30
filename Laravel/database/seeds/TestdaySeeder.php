<?php

use Illuminate\Database\Seeder;

class TestdaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('testdays')->delete();

        DB::table('testdays')->insert([
           'date' => 'Date' . $i,
            'startHour' => 'Heure de début' . $i,
            'endHour' => 'Heure de fin' . $i,
            'event_id' =>  $i,
            'edition_id' => $i,
            'badge_id' => $i,
            'test_id' =>  $i,
    ]);
    }
}
