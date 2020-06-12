<?php


namespace App\Services\Admin;


use App\Models\Term;
use App\Validators\Admin\TermsValidator;


class TermsService extends BaseService
{
    /**
     * TermsService constructor.
     * @param TermsValidator $termsValidator
     * @param Term $term
     */
    public function __construct(TermsValidator $termsValidator, Term $term)
    {
        $this->set_model($term);
        $this->baseValidator = $termsValidator;
    }
}
