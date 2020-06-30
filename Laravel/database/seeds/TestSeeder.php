<?php

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('tests')->delete();

        DB::table('tests')->insert([
            'number' => 'Nombre' . '345',
            'startTime' => 'Heure de début' . '9h00',
            'endTime' => 'Heure de fin' . '17h00',
            'feedback' => 'Feedback' . 'Géniale, rien à dire',
            'testday_id' => '01',
            'edition_id' => '14',
            'event_id' => '2020',
            'product_id' => '74',
            'client_id' => '03',
        ]);
    }

}
