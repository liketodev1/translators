<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LanguageLevelUser extends Model
{
    protected $table = 'language_level_user';

    protected $fillable =[
        'language_id',
        'language_level_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function language()
    {
        return $this->hasOne(Language::class,'id','language_id');
    }

    public function languageLevel()
    {
        return $this->hasOne(LanguageLevel::class,'id','language_level_id');
    }
}
