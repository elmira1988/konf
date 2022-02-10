<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildAuthors extends Model
{
    //
    protected $table="child_authors";

    public function degree()
    {
        return $this->belongsTo('App\Degree');
    }

    public function rank()
    {
        return $this->belongsTo('App\Rank');
    }

    public function article()
    {
        return $this->belongsTo('App\ChildArticle');
    }
}
