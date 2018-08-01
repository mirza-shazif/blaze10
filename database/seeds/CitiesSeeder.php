<?php

use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cities')->insert([
        [ 'city_name' => 'Lahore', 'state_id' => 1 ],
        [ 'city_name' => 'Peshawar', 'state_id' => 2 ],
        [ 'city_name' => 'Istanbul', 'state_id' => 3 ],
        [ 'city_name' => 'New York', 'state_id' => 4 ],
        [ 'city_name' => 'Toronto', 'state_id' => 5 ],
        [ 'city_name' => 'Hamburg', 'state_id' => 6 ],
        [ 'city_name' => 'Paris', 'state_id' => 7 ]
      ]);
    }
}
