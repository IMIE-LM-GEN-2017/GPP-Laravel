<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
        'start_date',
        'due_date',
        'end_time',
        'creation_date',
        'modification_date',
        'todolist_id',
    ];

    public function todolist()
    {
        return $this->belongsTo('App\Todolist');
    }
}
