<?php

use Illuminate\Database\Seeder;

class EditionProductSeeder extends Seeder {

    /**
     * Run the database seeds.
     *EditionProductSeeder permet de compléter des inforamtions relatives à un porduit dans une édition
     * @return void
     */
    public function run() {
        //
        DB::table('edition_product')->delete();

        DB::table('edition_product')->insert([[
            'edition_id' => '1',
            'product_id' => '1',
            'event_id' => '1',
            
        ],
                [
            'edition_id' => '1',
            'product_id' => '2',
            'event_id' => '1',
            
        ]]);
    }

}
