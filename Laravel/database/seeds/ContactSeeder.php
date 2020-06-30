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
           'since' => 'Depuis' . '03.10.2020',
            'until' => 'Jusqu à'. '04.10.2020',
            'person_id' => '04359',
            'company_id' => '934',
        ]);
        
    }
}
