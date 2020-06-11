<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specializations extends Model
{
    protected $table = 'specializations';

    protected $fillable =[];

    public function users()
    {
        return  $this->belongsToMany(User::class,'specialization_id','user_id')->withTimestamps();
    }
}
