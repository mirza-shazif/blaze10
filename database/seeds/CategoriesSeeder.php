<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
        ['category_name' => 'Acting'],
        ['category_name' => 'Dance'],
        ['category_name' => 'Film'],
        ['category_name' => 'Modeling'],
        ['category_name' => 'Music'],
        ['category_name' => 'Sports']
      ]);
    }
}
