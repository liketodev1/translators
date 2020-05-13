<?php


namespace App\Http\Controllers;


use App\Models\PrivacyPolicy;
use App\Models\Term;

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

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function terms()
    {
        $term = Term::first(['title', 'description', 'updated_at']);
        return view('pages.terms', compact('term'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function privacyPolicy()
    {
        $policy = PrivacyPolicy::first(['title', 'description', 'updated_at']);
        return view('pages.privacyPolicy', compact('policy'));
    }

}
