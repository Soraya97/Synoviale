<?php

use Illuminate\Database\Seeder;

class TestDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('test_days')->delete();

        DB::table('test_days')->insert([
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
