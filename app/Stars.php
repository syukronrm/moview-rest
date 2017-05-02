<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stars extends Model
{
	protected $table = 'stars';

	protected $fillable = [
        'name'
    ];

    public function movies() {
    	// return this->belongsToMany('App\Movies', 'movies_stars', 'movies_id', 'stars_id');
    	return $this->belongsToMany('App\Movies');
    }
}
