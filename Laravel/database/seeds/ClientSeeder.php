<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('clients')->delete();

        DB::table('clients')->insert([
           'homeCanton' => 'Canton' . 'VD',
            'person_id' =>  '942',
            'badge_id' =>  '9385',
            'test_id' =>  '835'
        ]);
    }
}
