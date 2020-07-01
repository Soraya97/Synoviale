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
           'number' => 'Nombre' . '9458',
            'place' => 'Place' . 'Gryon',
            'startDate' => 'Date de début' . '02.10.2020',
            'endDate' => 'Date de fin' . '04.10.2020',
            'event_id' =>  '2020',
        ]);
    }
}
