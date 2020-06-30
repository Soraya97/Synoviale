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
            'number' => 'Nombre' . $i,
            'startTime' => 'Heure de début' . $i,
            'endTime' => 'Heure de fin' . $i,
            'feedback' => 'Feedback' . $i,
            'testday_id' => $i,
            'edition_id' => $i,
            'event_id' => $i,
            'product_id' => $i,
            'client_id' => $i,
        ]);
    }

}
