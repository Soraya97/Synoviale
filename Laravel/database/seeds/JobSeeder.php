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
            'description' => 'Accueil',
            'event_id' => '2020',
            'edition_id' => '14',
            'staff_id' => '76',
        ]);
    }

}
