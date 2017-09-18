<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersPromotion extends Model
{
    protected $fillable = ['user_id', 'promotion_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function promotion()
    {
        return $this->belongsTo('App\Promotion');
    }
}
