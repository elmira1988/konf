<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $table = 'degree';

    public function authors()
    {
        return $this->hasMany('App\Author')->orderBy('created_at','desc');
    }
}
