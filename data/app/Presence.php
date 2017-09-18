<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    protected $fillable= ['is_present', 'excuse', 'lesson_id', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function lesson(){
        return $this->belongsTo('App\Lesson');
    }
}
