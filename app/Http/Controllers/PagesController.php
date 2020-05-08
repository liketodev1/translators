<?php


namespace App\Http\Controllers;


class PagesController extends BaseController
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function aboutUs()
    {
        return view('pages.about');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function howItWorks()
    {
        return view('pages.howItWorks');
    }

    public function terms()
    {
        return view('pages.terms');
    }

    public function privacyPolicy()
    {
        return view('pages.privacyPolicy');
    }

}
