<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
    	"comment", "product_id", "user_id"
    ];

    public function product()
    {
    	return $this->belongsTo('App\Products');
    }
}
