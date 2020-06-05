<?php


namespace App\Casts;


use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class DateFormat implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return date('F j, Y', strtotime($value));
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return $value;
    }
}