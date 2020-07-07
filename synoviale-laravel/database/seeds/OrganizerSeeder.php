<?php

use Illuminate\Database\Seeder;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *Organizer permet d'attribuer l'organisation à une personne
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
