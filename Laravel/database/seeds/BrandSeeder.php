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
           'name' => 'Nom' . $i,
            'shortDescr' => 'Description coutre' . $i,
            'longDescr' => 'Description longue' . $i,
            'company_id' => $i,
        ]);
    }
}
