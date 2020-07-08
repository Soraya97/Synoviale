<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *CompanySeeder permet de compléter des informations relatives à une companie
     * @return void
     */
    public function run()
    {
        //
        DB::table('companies')->delete();

        DB::table('companies')->insert([[
           
            'name' =>  'Super Sport',
        ]
            ]);
    }
}
