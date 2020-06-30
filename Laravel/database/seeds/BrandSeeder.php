<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->delete();

        DB::table('brands')->insert([
           'name' => 'Nom' . 'Yeti',
            'shortDescr' => 'Description coutre' . 'très sympa',
            'longDescr' => 'Description longue' . 'très très très sympa',
            'company_id' => '029357',
        ]);
    }
}
