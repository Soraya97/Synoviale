<?php

use Illuminate\Database\Seeder;

class AddresstypeSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('addresstypes')->delete();
        DB::table('addresstypes')->insert([
            'description' => 'Très paisible',
            'company_id' => '1',
            'address_id' => '1',
        ],
                [
            'description' => 'Très sympa',
            'company_id' => '2',
            'address_id' => '2',
        ],
                [
            'description' => 'Très ensoleillé',
            'company_id' => '3',
            'address_id' => '3',
        ],
                [
            'description' => 'Très bien',
            'company_id' => '4',
            'address_id' => '4',
        ]
                );
    }

}
