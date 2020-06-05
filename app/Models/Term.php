<?php


namespace App\Models;


use App\Casts\DateFormat;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'updated_at' => DateFormat::class
    ];
}
