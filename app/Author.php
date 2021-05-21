<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable =['surname_ru','name_ru','patronymic_ru','work_ru','adress_ru','status_ru','surname_en','name_en','patronymic_en','work_en','adress_en','status_en'];

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
        return $this->belongsTo('App\Article');
    }
}
