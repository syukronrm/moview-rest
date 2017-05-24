<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
	public $timestamps = false;
    public function movies() {
    	return $this->belongsToMany('App\Movies');
    }
}
