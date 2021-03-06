<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(CategorySeeder::class);
        
	}
}
