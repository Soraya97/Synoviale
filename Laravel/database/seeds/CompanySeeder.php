<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('companies')->delete();

        DB::table('companies')->insert([
           'number' => 'Nombre' . $i,
            'name' =>  'Name' . $i,
            'brand_id' => $i,
            'addressType_id' => $i,
            'contact_id' =>  $i,
        ]);
    }
}
