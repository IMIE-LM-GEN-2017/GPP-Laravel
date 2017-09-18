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
        'username',
        'password',
        'first_name',
        'last_name',
        'is_teacher',
        'email',
        'gender',
        'status',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }

    public function presences()
    {
        return $this->hasMany('App\Presences');
    }

    public function centers()
    {
        return $this->hasManyThrough('App\Center', 'App\UsersCenter');
    }

    public function promotions()
    {
        return $this->hasManyThrough('App\Promotion', 'App\UsersPromotion');
    }
}
