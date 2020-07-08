<?php

use Illuminate\Database\Seeder;

class JobPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *JobPersonSeeder permet de compléter le job d'une personne
     * @return void
     */
    public function run()
    {
        //
        DB::table('job_person')->delete();
        
                DB::table('job_person')->insert([
                    'job_id' => '1',
                    'person_id' => '3' 
                ]);
    }
}
