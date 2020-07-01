<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // $this->call(UserSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(AddresstypeSeeder::class);
        $this->call(BadgeSeeder::class);
        $this->call(BikeSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(EditionSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(JobSeeder::class);
        $this->call(PersonSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(TestdaySeeder::class);
        $this->call(TestSeeder::class);

        // avec les tables pivots
        $this->call(BrandEditionSeeder::class);
        $this->call(EditionProductSeeder::class);
        $this->call(JobPersonSeeder::class);
    }

}
