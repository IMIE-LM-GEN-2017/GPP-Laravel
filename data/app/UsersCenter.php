<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersCenter extends Model
{
    protected $fillable = ['user_id', 'center_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function center()
    {
        return $this->belongsTo('App\Center');
    }
}
