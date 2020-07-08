<?php

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder {

    /**
     * Run the database seeds.
     *AddressSeeder permet de compléter les address pour des personnes
     * @return void
     */
    public function run() {
        //
        DB::table('addresses')->delete();
        
        DB::table('addresses')->insert([[
            
            'street1' => 'Avenue des Sports',
            'street2' => 'Avenue de la Gare',
            'streetNumber' => '2',
            'POBox' => 'CP320',
            'city_id' => '1',
            'person_id' => '1',         
                ],
                [
                    
                    'street1' => 'Avenue des Alpes',
                    'street2' => 'Rue des Tulipes',
                    'streetNumber' => '4',
                    'POBox' => 'CP330',
                    'city_id' => '2',
                    'person_id' => '2',                 
        ],
                [
                    
                    'street1' => 'Chemin du Tessin',
                    'street2' => 'Chemin de la Perrause',
                    'streetNumber' => '6',
                    'POBox' => 'CP340',
                    'city_id' => '3',
                    'person_id' => '3',                
        ],
                [
                    
                    'street1' => 'Murstrasse',
                    'street2' => 'Spitalstrasse',
                    'streetNumber' => '8',
                    'POBox' => 'CP350',
                    'city_id' => '4',
                    'person_id' => '4',                    
        ],
            [
                    
                    'street1' => 'Kriegstrasse',
                    'street2' => 'Kirschestrasse',
                    'streetNumber' => '10',
                    'POBox' => 'CP360',
                    'city_id' => '4',
                    'person_id' => '5',                    
        ],
            [
                    
                    'street1' => 'Apfelstrasse',
                    'street2' => 'Vespastrasse',
                    'streetNumber' => '12',
                    'POBox' => 'CP370',
                    'city_id' => '4',
                    'person_id' => '6',                    
        ]
                ]);
    }

}
