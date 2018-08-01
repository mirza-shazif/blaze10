<?php

use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('states')->insert([
        [ 'state_name' => 'Punjab', 'country_id' => 1 ],
        [ 'state_name' => 'KPK', 'country_id' => 1 ],
        [ 'state_name' => 'Adana', 'country_id' => 2 ],
        [ 'state_name' => 'New York', 'country_id' => 3 ],
        [ 'state_name' => 'Ontario', 'country_id' => 4 ],
        [ 'state_name' => 'Berlin', 'country_id' => 5 ],
        [ 'state_name' => 'Francicia', 'country_id' => 6 ]
      ]);
    }
}
