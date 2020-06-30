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
            'number' => 'Nombre' . $i,
            'shortDescr' => 'Description courte' . $i,
            'longDescr' => 'Description longue' . $i,
            'distinctiveSign' => 'Signe distinctif' . $i,
            'lienWeb' => 'Lien Web' . $i,
            'brand_id' => $i,
            'test_id' => $i,
            'bike_id' => $i,
        ]);
    }

}
