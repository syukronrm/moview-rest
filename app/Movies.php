<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    public $timestamps = false;
    public function genres() {
    	return $this->belongsToMany('App\Genres', 'genres_movies', 'movies_id', 'genres_id');
    }

    public function reviews() {
    	return $this->belongsToMany('App\Reviews', 'movies_reviews', 'movies_id', 'reviews_id');
    }

    public function stars() {
    	return $this->belongsToMany('App\Stars', 'movies_stars', 'movies_id', 'stars_id');
    }
}
