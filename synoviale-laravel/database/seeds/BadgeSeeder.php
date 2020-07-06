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
           'number' => '1' ,
            'client_id' =>  '4',
            'testday_id' => '1',
            'edition_id' => '1',
            'event_id' =>  '1',
        ]);
    }
}
