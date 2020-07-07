<?php

use Illuminate\Database\Seeder;

class BrandEditionSeeder extends Seeder {

    /**
     * Run the database seeds.
     *BrandEditionSeeder permet d'attribuer des marques à une ou des éditions
     * @return void
     */
    public function run() {
        //
        DB::table('brand_edition')->delete();
        
                DB::table('brand_edition')->insert([[
                    'brand_id' => '1' ,
                    'edition_id' => '1',
                    'event_id' => '1',
                ],
                        [
                    'brand_id' => '2' ,
                    'edition_id' => '1',
                    'event_id' => '1',
                ]]);
            
        
    }

}
