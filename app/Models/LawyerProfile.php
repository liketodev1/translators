<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LawyerProfile extends Model
{
    protected $table = 'lawyer_profiles';

    protected $primaryKey = 'id';

    protected $guarded =[];

    protected $casts = [
        'public_sector' => 'boolean',
        'private_sector' => 'boolean',
        'education' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id');
    }
}
