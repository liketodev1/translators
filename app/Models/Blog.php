<?php

namespace App\Models;

use App\Casts\DateFormat;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'status',
        'slug',
        'type',
        'title',
        'description',
        'image',
        'author',
        'published_at',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'blog_tags','blog_id','tag_id')->withTimestamps();
    }
}
