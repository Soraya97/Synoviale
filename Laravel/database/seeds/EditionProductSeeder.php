<?php

use Illuminate\Database\Seeder;

class EditionProductSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('edition_production')->delete();

        DB::table('edition_production')->insert([
            'edition_id',
            'production_id'
        ]);
    }

}
