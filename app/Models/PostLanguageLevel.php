<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostLanguageLevel extends Model
{
    protected $table = 'post_language_levels';

    protected $fillable =[
        'language_id',
        'language_level_id',
    ];

    public function language()
    {
        return $this->hasOne(Language::class,'id','language_id');
    }

    public function languageLevel()
    {
        return $this->hasOne(LanguageLevel::class,'id','language_level_id');
    }

}
