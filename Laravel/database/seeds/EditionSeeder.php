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
           'number' => 'Nombre' . $i,
            'place' => 'Place' . $i,
            'startDate' => 'Date de début' . $i,
            'endDate' => 'Date de fin' . $i,
            'event_id' =>  $i,
            'job_id' => $i,
            'testday_id' => $i,
            'brand_id' =>  $i,
        ]);
    }
}
