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
           'number' => '756238' ,
            'client_id' =>  '7562381',
            'testday_id' => '7562328',
            'edition_id' => '7562338',
            'event_id' =>  '7562348',
        ]);
    }
}
