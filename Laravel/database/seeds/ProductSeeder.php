<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('products')->delete();

        DB::table('products')->insert([
            'number' => '1',
            'shortDescr' => 'Très joli',
            'longDescr' => 'Magnifiquement bien disigné',
            'distinctiveSign' => 'bleu roi',
            'lienWeb' => 'https://www.google.com',
            'brand_id' => '1',
        ],
                [
            'number' => '2',
            'shortDescr' => 'Très beau',
            'longDescr' => 'Magnifiquement bien pensé',
            'distinctiveSign' => 'rouge vif',
            'lienWeb' => 'https://www.google.com',
            'brand_id' => '1',
        ]);
    }

}
