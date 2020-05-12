<?php


namespace App\Models;


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

    /**
     * @param $date
     * @return string
     */
    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }
}
