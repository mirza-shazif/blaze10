<?php

use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('countries')->insert([
        ['country_name' => 'Pakistan'],
        ['country_name' => 'Turkey'],
        ['country_name' => 'United States'],
        ['country_name' => 'Canada'],
        ['country_name' => 'Germany'],
        ['country_name' => 'France'],
      ]);
    }
}
