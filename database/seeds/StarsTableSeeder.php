<?php

use Illuminate\Database\Seeder;
use App\Stars;

class StarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stars')->delete();

        $star = DB::table('stars')->insert([
            "id" => 1,
            "name" => "Elle Fanning",
        ]);

        $star = DB::table('stars')->insert([
            "id" => 2,
            "name" => "Carly Rae Jepsen",
        ]);
    }
}
