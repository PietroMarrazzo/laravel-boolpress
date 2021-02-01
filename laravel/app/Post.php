<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // relazioni DB

    //posts - users
    public function user() {
        return $this->belongsTo('App\User');
    }
}
