<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
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
