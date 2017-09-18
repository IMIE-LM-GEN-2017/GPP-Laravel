<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $fillable = ['name', 'address', 'city', 'zip'];

    public function promotions()
    {
        return $this->hasMany('App\Promotion');
    }
    public function rooms()
    {
        return $this->hasMany('App\Room');
    }

    public function users()
    {
        return $this->hasManyThrough('App\User', 'App\UsersCenter');
    }
}
