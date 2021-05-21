<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    public function authors()
    {
        return $this->hasMany('App\Author')->orderBy('created_at','desc');
    }
}
