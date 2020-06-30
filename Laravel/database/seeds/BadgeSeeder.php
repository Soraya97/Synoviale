<?php

use Illuminate\Database\Seeder;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('badges')->delete();

        DB::table('badges')->insert([
           'number' => 'Nombre' . $i,
            'client_id' =>  $i,
            'testday_id' => $i,
            'edition_id' => $i,
            'event_id' =>  $i,
        ]);
    }
}
