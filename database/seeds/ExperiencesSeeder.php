<?php

use Illuminate\Database\Seeder;

class ExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert([
    ['name'=>'less than 1 year'],
    ['name'=>'Greater than 1 year']

        ]);
    }
}
