<?php

use Illuminate\Database\Seeder;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('badges')->delete();

        DB::table('badges')->insert([
           'framSize' => 'Taille du cadre' . $i,
            'framUnite' => 'Unité du cadre' . $i,
            'rimSize' => 'Taille de la jante' .$i,
            'rimUnit' => 'Unité de la jante' .$i,
            'product_id' =>  $i,
        ]);
    }
}
