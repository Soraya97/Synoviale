<?php

use Illuminate\Database\Seeder;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('organizers')->delete();

        DB::table('organizers')->insert([
            'person_id' => '1',
                ]);
    }
}
