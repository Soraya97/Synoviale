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
           'number' => 'Nombre' . '06',
            'name' =>  'Name' . 'Super Sport',
            'brand_id' => '49',
            'addressType_id' => '34',
            'contact_id' =>  '436',
        ]);
    }
}
