<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
use App\Genres;
use App\Reviews;
use App\Stars;
use App\GenresMovies;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movies::all();
        foreach ($movies as $movie) {
            $movie->stars = $movie->stars;
            $movie->genres = $movie->genres;
            $reviews = $movie->reviews;
            foreach ($reviews as $review) {
                $review->user = $review->user;
            }
            $movie->reviews = $reviews;
            $movie->director = $movie->director;

        }
        return response()->json($movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movies::find($id);
        $movie->stars = $movie->stars;
        $movie->genres = $movie->genres;
        $movie->reviews = $movie->reviews;
        return response()->json($movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showReviews($id) {
        $movie = Movies::find($id);
        return response()->json($movie->reviews);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeReview(Request $request, $id)
    {
        $movie = Movies::find($id);

        $review = new Reviews();
        $review->rating = $request->rating;
        $review->comment = $request->comment;
        $review->id_user = $request->iduser;   // STATIC
        $review->namauser = $request->namauser;
        $review->timestamp = new \DateTime();
        $review->save();

        $movie->reviews()->attach($review->id);
        return response()->json($review);
    }

    /**
    * Search movies based on query.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function search(Request $request)
    {
        //
    }

    public function showMoviesByGenre($genre) {
        $movies = Movies::distinct()
                    ->join('genres_movies', 'movies.id', '=', 'genres_movies.movies_id')
                    ->join('genres', 'genres.id', '=', 'genres_movies.genres_id')
                    ->select('movies.*')
                    ->where('genres.name', $genre)
                    ->get();

        foreach ($movies as $movie) {
            $movie->stars = $movie->stars;
            $movie->genres = $movie->genres;
            $movie->reviews = $movie->reviews;
        }

        return response()->json($movies);    }
}