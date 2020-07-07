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
            'type' => 'e-vtt',
            'frameSize' => 'Grande',
            'frameUnit' => '10',
            'rimSize' => 'Moyenne',
            'rimUnit' => '5',
            'product_id' => '1',
        ],
                [
            'type' => 'vtt',
            'frameSize' => 'Moyenne',
            'frameUnit' => '5',
            'rimSize' => 'Moyenne',
            'rimUnit' => '4',
            'product_id' => '2',
        ],
                [
            'type' => 'route',
            'frameSize' => 'Grande',
            'frameUnit' => '10',
            'rimSize' => 'Moyenne',
            'rimUnit' => '5',
            'product_id' => '3',
        ],
                [
            'type' => 'e-route',
            'frameSize' => 'Moyenne',
            'frameUnit' => '5',
            'rimSize' => 'Moyenne',
            'rimUnit' => '4',
            'product_id' => '4',
        ]]);
    }

}
