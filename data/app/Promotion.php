<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = ['name', 'description', 'start_date', 'end_date', 'center_id'];

    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }
    public function center()
    {
        return $this->belongsTo('App\Center');
    }

    public function users()
    {
        return $this->hasManyThrough('App\User', 'App\UsersPromotion');
    }
}
