<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildArticle extends Model
{
    //
    protected $table="child_articles";

    public function form()
    {
        return $this->belongsTo('App\ChildForm');
    }

    public function section()
    {
        return $this->belongsTo('App\ChildSection');
    }

    public function authors()
    {
        return $this->hasMany('App\ChildAuthors','article_id')->orderBy('created_at','desc');
    }
}
