<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'role',
        'email',
        'password',
        'confirmation_token',
        'confirmed_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Generate a random hexadecimal token by hashing the current time in microseconds as float
     *
     * @return string Random 32-characters long hexadecimal token
     */
    public static function generateToken()
    {
        return rand(100000,999999);
    }

    /**
     * Check if the confirmation_token field in the database is NULLed or not
     *
     * @return bool Whether the user has confirmed his e-mail address or not
     */
    public function hasConfirmed()
    {
        return $this->confirmation_token === null ? true : false;
    }

    /**
     * Try to confirm the user's e-mail address using the provided token
     *
     * @param $token string The user-provided token
     * @return bool Whether the confirmation succeed or not.
     */
    public function confirm($token)
    {
        // If the user has already confirmed we can't confirm him again.
        if ($this->hasConfirmed()){
            return false;
        }

        if ($token === $this->confirmation_token) {
            // User has confirmed his e-mail address.
            $this->confirmation_token = null;
            $this->confirmed_at = Carbon::now();
            $this->save();

            return true;
        }

        // Token was incorrect.
        return false;
    }

    public function profile()
    {
        return $this->hasOne(LawyerProfile::class,'user_id','id');
    }

    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }

    public function specializations()
    {
       return  $this->belongsToMany(Specializations::class,'specialization_user','user_id','specialization_id')->withTimestamps();
    }

    public function languageLevel()
    {
        return $this->hasMany(LanguageLevelUser::class,'user_id','id');
    }

}
