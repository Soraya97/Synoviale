<?php

use Illuminate\Database\Seeder;

class EditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *EditionSeeder permet de compléter des informations relatives à une édition
     * @return void
     */
    public function run()
    {
        //
        DB::table('editions')->delete();

        DB::table('editions')->insert([
           'number' => '12',
            'place' => 'Gryon',
            'startDate' => '2020-10-02',
            'endDate' => '2020-10-04',
            'event_id' =>  '1',
        ]);
    }
}
