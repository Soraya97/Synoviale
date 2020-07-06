<?php

use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('stores')->delete();

        DB::table('stores')->insert([
            'person_id' => '2',
                ]);
    }
}
