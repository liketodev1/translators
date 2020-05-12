<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TranslatorProfile extends Model
{
    protected $table = 'translator_profiles';

    protected $primaryKey = 'id';

    protected $guarded =[];

    protected $casts = [
        'public_sector' => 'boolean',
        'private_sector' => 'boolean',
        'education' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
