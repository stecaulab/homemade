<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //relationship  Aricle ->user  one to Many inversa

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //relationship  Category ->Article Many to Many 2 side
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}