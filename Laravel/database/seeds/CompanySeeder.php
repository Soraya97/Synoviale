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

        DB::table('companies')->insert([[
           'number' => '1',
            'name' =>  'Super Sport',
        ]]);
    }
}
