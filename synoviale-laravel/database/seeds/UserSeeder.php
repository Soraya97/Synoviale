<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *UserSeeder permet de compléter des informations relatives à un utilisateur
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            [
            'username' => 'thomas',
            'email' => 'example1@test.com',
            'password' => '',
            'person_id' => 1,
            ],
            [
            'username' => 'leandra',
            'email' => 'example2@test.com',
            'password' => '',
            'person_id' => 2,
            ],
            [
            'username' => 'maxime',
            'email' => 'example3@test.com',
            'password' => '',
            'person_id' => 3,
            ],
            [
            'username' => 'lola',
            'email' => 'example4@test.com',
            'password' => '',
            'person_id' => 4,
            ],
            [
            'username' => 'lenny',
            'email' => 'example5@test.com',
            'password' => '',
            'person_id' => 5,
            ],
            [
            'username' => 'lea',
            'email' => 'example6@test.com',
            'password' => '',
            'person_id' => 6,
            ]
        ]);
    }
}
