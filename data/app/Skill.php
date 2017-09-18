<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name', 'description'];

    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }

    public function users()
    {
        return $this->hasManyThrough('App\User', 'App\UsersSkill');
    }

    public function teachers()
    {
        return $this->hasManyThrough('App\User', 'App\UsersTeachesSkill');
    }
}
