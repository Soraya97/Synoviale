<?php

use Illuminate\Database\Seeder;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *BadgeSeeder permet de créer des badge
     * @return void
     */
    public function run()
    {
        //
        DB::table('badges')->delete();

        DB::table('badges')->insert([
           'number' => '1' ,
            'client_id' =>  '1',
            'testday_id' => '1',
            'edition_id' => '1',
            'event_id' =>  '1',
        ]);
    }
}
