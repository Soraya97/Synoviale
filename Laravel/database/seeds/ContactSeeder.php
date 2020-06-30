<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contacts')->delete();

        DB::table('contacts')->insert([
           'since' => 'Depuis' . $i,
            'until' => 'Jusqu à'. $i,
            'person_id' => $i,
            'company_id' => $i,
        ]);
        
    }
}
