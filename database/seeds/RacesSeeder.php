<?php

use Illuminate\Database\Seeder;

class RacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('races')->insert([
        [ 'name' => 'Asian' ],
        [ 'name' => 'African' ],
        [ 'name' => 'American' ]
      ]);
    }
}
