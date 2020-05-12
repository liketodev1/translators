<?php


namespace App\Validators\Admin;

use Illuminate\Support\Facades\Validator;

class TermsValidator
{
    /**
     * @param $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function valid($data)
    {
        $validator = Validator::make($data, [
            'title' => ['required'],
            'description' => ['required'],
        ]);

        return $validator;
    }
}
