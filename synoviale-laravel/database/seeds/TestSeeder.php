<?php

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder {

    /**
     * Run the database seeds.
     *TestSeeder permet de compléter des informations relatives à un test
     * @return void
     */
    public function run() {
        //
        DB::table('tests')->delete();

        DB::table('tests')->insert([
            
            'startTime' => '10:00',
            'endTime' => '11:30',
            'feedback' => 'Géniale, rien à dire',
            'testday_id' => '1',
            'edition_id' => '1',
            'event_id' => '1',
            'product_id' => '1',
            'client_id' => '4',
        ]);
    }

}
