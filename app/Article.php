<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['name_ru','name_en','annot_ru','annot_en','word_ru','word_en','udk','files','language','phone','email'];

    protected $casts = [
        'word_ru' => 'array',
        'word_en' => 'array',
        'created_at' => 'datetime:d.m.Y'
    ];

    public function form()
    {
        return $this->belongsTo('App\Form');
    }

    public function section()
    {
        return $this->belongsTo('App\Section');
    }

    public function authors()
    {
        return $this->hasMany('App\Author')->orderBy('created_at','desc');
    }
}
