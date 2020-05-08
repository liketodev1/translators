<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $table = 'options';

    protected $primaryKey = 'id';

    const LANGUAGE = 1;
    const SPECIFICATION = 2;
    const INDUSTRY_SPECIALIZATION = 3;

    public function userSpecialization()
    {
        return $this->belongsToMany(User::class,'options_user')->withTimestamps();
    }

    public function userSpecification()
    {
        return $this->belongsToMany(User::class,'specification_user')->withTimestamps();
    }

}
