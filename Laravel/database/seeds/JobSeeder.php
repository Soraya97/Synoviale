<?php

use Illuminate\Database\Seeder;

class JobSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('jobs')->delete();

        DB::table('jobs')->insert([
            'description' => 'Description' . $i,
            'event_id' => $i,
            'edition_id' => $i,
            'staff_id' => $i,
        ]);
    }

}
