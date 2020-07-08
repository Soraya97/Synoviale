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

            'shortDescr' => 'SB165',
            'longDescr' => 'MASTER OF THE GNARNIVERSE. BOLD CLAIM FOR SOME.',
            'distinctiveSign' => '165',
            'lienWeb' => 'https://www.google.com',
            'brand_id' => '1',
        ],
                [

            'shortDescr' => 'Piolet Complete Bike',
            'longDescr' => 'The Piolet is our dependable, simple, and capable rough-and-tumble bike.',
            'distinctiveSign' => 'Piolet',
            'lienWeb' => 'https://www.google.com',
            'brand_id' => '2',
        ],
            [

            'shortDescr' => 'Dimanche 28',
            'longDescr' => 'Pour tous ! Partout ! Tout le temps !',
            'distinctiveSign' => '28',
            'lienWeb' => 'https://www.google.com',
            'brand_id' => '3',
        ],
                [

            'shortDescr' => 'Gravel 10',
            'longDescr' => 'Le SCOTT Addict Gravel 10 se prête à toutes les routes et à toutes les conditions météo',
            'distinctiveSign' => '274774',
            'lienWeb' => 'https://www.google.com',
            'brand_id' => '4',
        ]]);
    }

}
