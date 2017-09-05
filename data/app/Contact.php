<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['username', 'email', 'is_teacher', 'status', 'role', 'message'];

    public function posts()
    {
        return $this->hasMany('App\Contact');
    }
}
