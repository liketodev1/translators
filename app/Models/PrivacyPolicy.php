<?php


namespace App\Models;


use App\Casts\DateFormat;
use Illuminate\Database\Eloquent\Model;

class PrivacyPolicy extends Model
{
    /**
     * @var string
     */
    protected $table = 'privacy_policy';

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
