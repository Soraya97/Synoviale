<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            [
            'username' => 'thomas',
            'email' => 'example1@test.com',
            'password' => '1234',
            'person_id' => 1,
            ],
            [
            'username' => 'leandra',
            'email' => 'example2@test.com',
            'password' => '1234',
            'person_id' => 2,
            ],
            [
            'username' => 'maxime',
            'email' => 'example3@test.com',
            'password' => '1234',
            'person_id' => 3,
            ],
            [
            'username' => 'lola',
            'email' => 'example4@test.com',
            'password' => '1234',
            'person_id' => 4,
            ],
        ]);
    }
}
