<?php

use Illuminate\Database\Seeder;

class TestdaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *TestdaySeeder permet de compléter des informations relatives à des jours de test
     * @return void
     */
    public function run()
    {
        //
        DB::table('testdays')->delete();

        DB::table('testdays')->insert([[
           'date' => '02.10.2020',
            'startHour' => '10:00',
            'endHour' => '13:30',
            'event_id' =>  '1',
            'edition_id' => '1',
    ],
    [
       'date' => '02.10.2020',
        'startHour' => '13:30',
        'endHour' => '17:00',
        'event_id' =>  '1',
        'edition_id' => '1',
],
                [
           'date' => '03.10.2020',
            'startHour' => '09:00',
            'endHour' => '12:30',
            'event_id' =>  '1',
            'edition_id' => '1',
    ],
    [
'date' => '03.10.2020',
'startHour' => '12:30',
'endHour' => '16:00',
'event_id' =>  '1',
'edition_id' => '1',
],
                [
           'date' => '04.10.2020',
            'startHour' => '09:00',
            'endHour' => '12:30',
            'event_id' =>  '1',
            'edition_id' => '1',
    ],
    [
  'date' => '04.10.2020',
  'startHour' => '12:30',
  'endHour' => '16:00',
  'event_id' =>  '1',
  'edition_id' => '1',
  ]
]);
    }
}
