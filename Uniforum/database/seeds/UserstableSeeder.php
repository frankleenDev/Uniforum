<?php

use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([


        	'name' => 'admin',

        	'password' => bcrypt('admin'),

        	'email' => 'admin@uniforum.com',

        	'admin' => 1,

        	'avatar' => asset('avatar/avatar.png')
        ]);
    }
}
