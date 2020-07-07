<?php

use Illuminate\Database\Seeder;

class JobSeeder extends Seeder {

    /**
     * Run the database seeds.
     *JobSeeder permet de compléter des informations relatives à un job
     * @return void
     */
    public function run() {
        //
        DB::table('jobs')->delete();

        DB::table('jobs')->insert([
            'description' => 'Accueil',
            'event_id' => '1',
            'edition_id' => '1',
            'employee_id' => '1',
        ]);
    }

}
