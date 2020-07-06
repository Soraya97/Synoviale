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

        DB::table('brands')->insert([[
           'name' => 'Yeti',
            'shortDescr' => 'Très rapide',
            'longDescr' => 'Changement des vitesses rapide',
            'company_id' => '1',
        ],
                [
           'name' => 'Orange',
            'shortDescr' => 'Très maniable',
            'longDescr' => 'Fait en carbone',
            'company_id' => '1',
        ]]);
    }
}
