<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function question()
    {
        return $this->belongsTo('App\Model\Question');
    }

    public function user()
    {
        return $this->belongsTo('App\Use');
    }

    public function like()
    {
        return $this->hasMany('App\Model\Like');
    }

}
