<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Francesco',
            'last_name' => 'Malatesta',
            'slug' => 'francesco_malatesta',

            'email' => 'hey@hellofrancesco.com',
            'password' => \Hash::make('123456')
        ]);

        User::create([
            'name' => 'Paolo',
            'last_name' => 'Rossi',
            'slug' => 'paolo_rossi',

            'email' => 'hey@paolorossi.com',
            'password' => \Hash::make('654321')
        ]);

    }
}