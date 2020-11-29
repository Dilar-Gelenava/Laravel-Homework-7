<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function actor()
	{
		return $this->belongsToMany('App\Actor', 'movie_actor', 'movie_id', 'actor_id');
	}
}
