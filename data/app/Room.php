<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['name', 'nb_seats', 'center_id'];

    public function events()
    {
        return $this->hasMany('App\Event');
    }

    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }

    public function center()
    {
        return $this->belongsTo('App\Center');
    }

}
