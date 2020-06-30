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
           'homeCanton' => 'Canton' . $i,
            'person_id' =>  $i,
            'badge_id' =>  $i,
            'test_id' =>  $i
        ]);
    }
}
