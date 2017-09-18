<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    protected $fillable = [
        'name',
        'user_id',
    ];

    // User
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // Tasks
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
