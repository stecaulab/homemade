<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //relationship  Category ->Article Many to Many 1 side
    public function articles()
	{
		return $this->belongsToMany('App\Article');
	}
}