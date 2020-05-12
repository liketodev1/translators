<?php


namespace App\Services\Admin;


use App\Models\PrivacyPolicy;
use App\Validators\Admin\PrivacyPolicyValidator;

class PrivacyPolicyService extends BaseService
{
    /**
     * PrivacyPolicyService constructor.
     * @param PrivacyPolicyValidator $privacyPolicyValidator
     * @param PrivacyPolicy $privacyPolicy
     */
    public function __construct(PrivacyPolicyValidator $privacyPolicyValidator, PrivacyPolicy $privacyPolicy)
    {
        $this->set_model($privacyPolicy);
        $this->baseValidator = $privacyPolicyValidator;
    }


}
