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
            'number' => 'Nombre' . '356',
            'shortDescr' => 'Description courte' . 'courte courte',
            'longDescr' => 'Description longue' . 'longue longue',
            'distinctiveSign' => 'Signe distinctif' . 'HS',
            'lienWeb' => 'Lien Web' . 'hhttps://www.google.com',
            'brand_id' => '345',
        ]);
    }

}
