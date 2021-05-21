<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public function articles()
    {
        return $this->hasMany('App\Article')->orderBy('created_at','desc');
    }
}
