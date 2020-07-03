<?php

use Illuminate\Database\Seeder;

class EditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('editions')->delete();

        DB::table('editions')->insert([
           'number' => '12',
            'place' => 'Gryon',
            'startDate' => '02.10.2020',
            'endDate' => '04.10.2020',
            'event_id' =>  '1',
        ]);
    }
}
