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
        DB::table('edition_product')->delete();

        DB::table('edition_product')->insert([
            'edition_id' => '1',
            'product_id' => '4',
            'event_id' => '1',
            
        ]);
    }

}
