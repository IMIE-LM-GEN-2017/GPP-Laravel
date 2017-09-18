<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['start_time', 'end_time', 'note', 'user_id', 'promotion_id', 'room_id', 'skill_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function promotion()
    {
        return $this->belongsTo('App\Promotion');
    }

    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    public function skill()
    {
        return $this->belongsTo('App\Skill');
    }

    public function presences(){
        return $this->hasMany('App\Presences');
    }
}
