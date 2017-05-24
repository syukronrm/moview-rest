<?php

use Illuminate\Database\Seeder;
use App\Genres;

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
        
        // DB::table('genres')->insert([
        //     "id" => 1,
        //     "name" => "Animation",
        // ]);

        // DB::table('genres')->insert([
        //     "id" => 2,
        //     "name" => "Adventure",
        // ]);

        // DB::table('genres')->insert([
        //     "id" => 3,
        //     "name" => "Comedy",
        // ]);

        // DB::table('genres')->insert([
        //     "id" => 4,
        //     "name" => "Family",
        // ]);


        $genre = new Genres();
        $genre->id = 1;
        $genre->name = "Horror";
        $genre->save();

        $genre = new Genres();
        $genre->id = 2;
        $genre->name = "Thriller";
        $genre->save();

        $genre = new Genres();
        $genre->id = 3;
        $genre->name = "Action";
        $genre->save();

        $genre = new Genres();
        $genre->id = 4;
        $genre->name = "Western";
        $genre->save();

        $genre = new Genres();
        $genre->id = 5;
        $genre->name = "Animation";
        $genre->save();

        $genre = new Genres();
        $genre->id = 6;
        $genre->name = "Adventure";
        $genre->save();

        $genre = new Genres();
        $genre->id = 7;
        $genre->name = "Romance";
        $genre->save();

        $genre = new Genres();
        $genre->id = 8;
        $genre->name = "War";
        $genre->save();

        $genre = new Genres();
        $genre->id = 9;
        $genre->name = "Documentary";
        $genre->save();

        $genre = new Genres();
        $genre->id = 10;
        $genre->name = "Scifi";
        $genre->save();

        $genre = new Genres();
        $genre->id = 11;
        $genre->name = "Comedy";
        $genre->save();

        $genre = new Genres();
        $genre->id = 12;
        $genre->name = "Family";
        $genre->save();

        $genre = new Genres();
        $genre->id = 13;
        $genre->name = "Musical";
        $genre->save();

        $genre = new Genres();
        $genre->id = 14;
        $genre->name = "Fiction";
        $genre->save();

        $genre = new Genres();
        $genre->id = 15;
        $genre->name = "Biographical";
        $genre->save();

        $genre = new Genres();
        $genre->id = 16;
        $genre->name = "Mystery";
        $genre->save();

        $genre = new Genres();
        $genre->id = 17;
        $genre->name = "Fantasy";
        $genre->save();

        $genre = new Genres();
        $genre->id = 18;
        $genre->name = "Drama";
        $genre->save();
    }
}
