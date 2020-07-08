<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *BrandSeeder permet d'afficher des marques de vélos
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->delete();

        DB::table('brands')->insert([[
           'name' => 'Yeti',
            'shortDescr' => 'Designed to Race. Built to Rally.',
            'longDescr' => 'Très bonne marque, vélo de qualité',
            'company_id' => '1',
        ],
                [
           'name' => 'Orange',
            'shortDescr' => 'The finiest bicycle product',
            'longDescr' => 'Très bonne marque, vélo tout terrain très maniable',
            'company_id' => '1',
        ],
                [
           'name' => 'Moustache',
            'shortDescr' => 'Pour laisser la voiture au garage...',
            'longDescr' => 'Très bonne marque, vélo avec une très bonne suspension',
            'company_id' => '1',
        ],
                [
           'name' => 'Scott',
            'shortDescr' => 'Heroes inspire heroes',
            'longDescr' => 'Très bonne marque, vélo fait avec des amtériaux de qualité',
            'company_id' => '1',
        ]]);
    }
}
