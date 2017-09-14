<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tdl extends Model
{
    protected $fillable = [
        'name',
        'content',
        'task_id',
    ];

    // User
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // Task
        public function task()
    {
        return $this->belongsTo('App\Task');
    }
}
