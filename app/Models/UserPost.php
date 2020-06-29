<?php

namespace App\Models;

use App\Casts\TimeAgo;
use Illuminate\Database\Eloquent\Model;

class UserPost extends Model
{
    protected $table = 'user_posts';

    protected $fillable = [];


    protected $casts = [
        'status' => 'boolean',
        'created_at' => TimeAgo::class
    ];

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }

    public function specialization()
    {
        return $this->belongsTo(Specializations::class,'specialization_id','id');
    }

    public function languageLevel()
    {
        return $this->hasMany(PostLanguageLevel::class,'post_id','id');
    }
}
