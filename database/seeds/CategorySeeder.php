<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create('it_IT');

        Category::create([
           'name' => 'News',
           'slug' => 'news',
            'description' => $faker->paragraph(3)
        ]);

        Category::create([
            'name' => 'Interviste',
            'slug' => 'interviste',
            'description' => $faker->paragraph(3)
        ]);

        Category::create([
            'name' => 'Reportage',
            'slug' => 'reportage',
            'description' => $faker->paragraph(3)
        ]);
	}
}