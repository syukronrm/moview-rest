<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
        	'id' => 1,
        	'name' => 'Fourir Akbar',
        	'email' => 'fourir96@gmail.com',
        	'password' => bcrypt('fourir96'),
        	// 'timestamp' => '2017-01-01 12:23:23'
        ]);

        DB::table('users')->insert([
        	'id' => 2,
        	'name' => 'Afif Ridho',
        	'email' => 'afifridho@gmail.com',
        	'password' => bcrypt('afifr'),
        	// 'timestamp' => '2017-02-19 12:23:23'
        ]);
    }
}
