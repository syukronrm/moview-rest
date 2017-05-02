<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->delete();
        
        DB::table('genres')->insert([
            "id" => 1,
            "name" => "Animation",
        ]);

        DB::table('genres')->insert([
            "id" => 2,
            "name" => "Adventure",
        ]);

        DB::table('genres')->insert([
            "id" => 3,
            "name" => "Comedy",
        ]);

        DB::table('genres')->insert([
            "id" => 4,
            "name" => "Family",
        ]);
    }
}
