<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //field if you can to be assigned data

    protected $fillable =   ['user_id','title','body','image'];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function comments(){

            //relazione 1  amolti tra post e commenti
        return $this->hasMany(Comment::class);

    }
}
