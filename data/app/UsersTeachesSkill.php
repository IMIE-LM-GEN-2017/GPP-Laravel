<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersTeachesSkill extends Model
{
    protected $fillable = ['user_id', 'skill_id', 'level'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function skill()
    {
        return $this->belongsTo('App\Skill');
    }
}
