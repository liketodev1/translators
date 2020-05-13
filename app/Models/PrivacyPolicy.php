<?php


namespace App\Models;


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
}
