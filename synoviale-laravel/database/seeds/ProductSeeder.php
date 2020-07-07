<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder {

    /**
     * Run the database seeds.
     *Product Seeder permet de compléter des informations relatives à un produit
     * @return void
     */
    public function run() {
        //
        DB::table('products')->delete();

        DB::table('products')->insert([[
            
            'shortDescr' => 'Très joli',
            'longDescr' => 'Magnifiquement bien designé',
            'distinctiveSign' => 'bleu roi',
            'lienWeb' => 'https://www.google.com',
            'brand_id' => '1',
        ],
                [
            
            'shortDescr' => 'Très beau',
            'longDescr' => 'Magnifiquement bien pensé',
            'distinctiveSign' => 'rouge vif',
            'lienWeb' => 'https://www.google.com',
            'brand_id' => '1',
        ],
            [

            'shortDescr' => 'Très élégant',
            'longDescr' => 'Magnifiquement bien réussi',
            'distinctiveSign' => 'vert sapin',
            'lienWeb' => 'https://www.google.com',
            'brand_id' => '1',
        ],
                [

            'shortDescr' => 'Très chic',
            'longDescr' => 'Magnifiquement bien fabriqué',
            'distinctiveSign' => 'noir mat',
            'lienWeb' => 'https://www.google.com',
            'brand_id' => '1',
        ]]);
    }

}
