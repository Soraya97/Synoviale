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
           'date' => 'Date' . '03.10.2020',
            'startHour' => 'Heure de début' . '09h00',
            'endHour' => 'Heure de fin' . '17h00',
            'event_id' =>  '20',
            'edition_id' => '14',
            'badge_id' => '567',
            'test_id' =>  '747',
    ]);
    }
}
