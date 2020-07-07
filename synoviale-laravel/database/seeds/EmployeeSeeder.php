<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *EmployeeSeeder permet de compléter des informations relatives à une personne et son emploie
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->delete();

        DB::table('employees')->insert([
            'person_id' => '3',
                ]);
    }
}
