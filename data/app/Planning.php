<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    protected $fillable = ['promotion_id', 'room_id', 'center_id', 'start_date', 'end_date'];

    public function posts()
    {
        return $this->hasMany('App\Planning');
    }
}
