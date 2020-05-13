<?php


namespace App\Http\Controllers\Admin;


use App\Services\Admin\TermsService;

class TermsController extends BaseController
{

    /**
     * @var string
     */
    protected $baseView = "admin.pages.term";
    /**
     * @var string
     */
    protected $baseFlashName = "Term Of Use";

    /**
     * @var string
     */
    protected $baseRoute = "admin.terms";
    /**
     * TermsController constructor.
     * @param TermsService $termsService
     */
    public function __construct(TermsService $termsService)
    {
        $this->baseService = $termsService;
    }
}
