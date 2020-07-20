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

    protected $casts = [
//      'published_at' => DateFormat::class
    ];

}
