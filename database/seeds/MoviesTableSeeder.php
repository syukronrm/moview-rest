<?php

use Illuminate\Database\Seeder;
use App\Movies;
use App\Reviews;

class MoviesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('movies')->delete();

		$movie = new Movies();
		$movie->id = 1;
		$movie->name = "One Two";
		$movie->img = "client/assets/mov1.jpg";
		$movie->year = 2015;
		$movie->desc = "Gak asik";
		$movie->save();

		$review = App\Reviews::find(1);
		$movie->reviews()->attach($review->id);

		$movie = new Movies();
		$movie->id = 2;
		$movie->name = "Leap!";
		$movie->img = "client/assets/mov2.jpg";
		$movie->year =  2016;
		$movie->desc = "Gak asik";
		$movie->save();
		
	    $movie->stars()->attach(array(1, 2));
	    $movie->genres()->attach(array(1, 2, 3, 4));
	    $movie->reviews()->attach(array(2, 3));
	}
}