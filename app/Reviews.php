<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    public $timestamps = false;
	
    public function movies() {
    	return $this->belongsToMany('App\Movies');
    }

    public function user() {
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
