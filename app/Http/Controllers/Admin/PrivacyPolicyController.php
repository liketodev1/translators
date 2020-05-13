<?php


namespace App\Http\Controllers\Admin;


use App\Services\Admin\PrivacyPolicyService;

class PrivacyPolicyController extends BaseController
{

    /**
     * @var string
     */
    protected $baseView = "admin.pages.privacy_policy";
    /**
     * @var string
     */
    protected $baseFlashName = "Privacy Policy";

    /**
     * @var string
     */
    protected $baseRoute = "admin.privacy_policy";

    /**
     * PrivacyPolicyController constructor.
     * @param PrivacyPolicyService $privacyPolicyService
     *
     */
    public function __construct(PrivacyPolicyService $privacyPolicyService)
    {
        $this->baseService = $privacyPolicyService;
    }

}
