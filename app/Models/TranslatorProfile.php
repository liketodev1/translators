<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TranslatorProfile extends Model
{
    protected $table = 'translator_profiles';

    protected $primaryKey = 'id';

    protected $guarded =[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
