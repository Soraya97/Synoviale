<?php

use Illuminate\Database\Seeder;

class BikeSeeder extends Seeder {

    /**
     * Run the database seeds.
     *BikeSeeder permet de générer différents type de vélos
     * @return void
     */
    public function run() {
        //
        DB::table('bikes')->delete();

        DB::table('bikes')->insert([[
            'type' => 'eVTT',
            'frameSize' => '150',
            'frameUnit' => 'mm',
            'rimSize' => '29',
            'rimUnit' => '"',
            'product_id' => '1',
        ],
                [
            'type' => 'VTT',
            'frameSize' => '120',
            'frameUnit' => 'mm',
            'rimSize' => '25',
            'rimUnit' => '"',
            'product_id' => '2',
        ],
                [
            'type' => 'Route',
            'frameSize' => '130',
            'frameUnit' => 'mm',
            'rimSize' => '27',
            'rimUnit' => '"',
            'product_id' => '3',
        ],
                [
            'type' => 'Gravel',
            'frameSize' => '130',
            'frameUnit' => 'mm',
            'rimSize' => '29',
            'rimUnit' => '"',
            'product_id' => '4',
        ]]);
    }

}
