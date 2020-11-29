<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
    	"title", "description", "user_id"
    ];

    public function comments()
    {
    	return $this->hasMany('App\Comments', 'product_id');
    }
}
