<?php

use Illuminate\Database\Seeder;

class JobPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('job_person')->delete();
        
                DB::table('job_person')->insert([
                    'job_id' => '02',
                    'person_id' => '01' 
                ]);
    }
}
