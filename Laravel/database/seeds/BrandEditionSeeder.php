<?php

use Illuminate\Database\Seeder;

class BrandEditionSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('brand_edition')->delete();
        
                DB::table('brand_edition')->insert([
                    'brand_id' ,
                    'edition_id' 
                ]);
            
        
    }

}
