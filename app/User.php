<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //relationship User-> Article One to Many

    public function roles()
        {

            return $this->belongsToMany(Role::class);
        }

    public function posts(){

        return $this->hasMany(Post::class);
    }

    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    public function checkRoles($roles){

        if(is_array($roles)){
            return $this->hasRole($roles) || abort(404);
        }

        return $this->hasRole($roles) || abort(404);

    }

    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn('name',$roles)->first();
    }

    public function hasRole($role)
    {
        return null !== $this->roles()->where('name',$role)->first();
    }
}
