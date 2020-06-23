<?php


namespace App\Http\Controllers;


use App\Models\PrivacyPolicy;
use App\Models\Term;
use App\Models\UserPost;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends BaseController
{

    /**
     * @return Factory|View
     */
    public function aboutUs()
    {
        return view('pages.about');
    }

    /**
     * @return Factory|View
     */
    public function howItWorks()
    {
        return view('pages.howItWorks');
    }

    /**
     * @return Factory|View
     */
    public function terms()
    {
        $term = Term::first(['title', 'description', 'updated_at']);
        return view('pages.terms', compact('term'));
    }

    /**
     * @return Factory|View
     */
    public function privacyPolicy()
    {
        $policy = PrivacyPolicy::first(['title', 'description', 'updated_at']);
        return view('pages.privacyPolicy', compact('policy'));
    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function findAJob(Request $request)
    {

        $query = UserPost::where('deleted_at','=',null)
                ->where('status','=',true);
         if ($request->bt){
             $query->where('billing_type','=',(int)$request->bt);
         }
         if ($request->s){
             $query->where('specialization_id','=',(int)$request->s);
         }
         if ($request->bt){
             $query->where('country_id','=',(int)$request->c);
         }

        $jobs = $query->get();

        return view('pages.find_a_jog',compact('jobs'));

    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function ourLawyers(Request $request)
    {

/*        $query = UserPost::where('deleted_at','=',null)
                ->where('status','=',true);
         if ($request->bt){
             $query->where('billing_type','=',(int)$request->bt);
         }
         if ($request->s){
             $query->where('specialization_id','=',(int)$request->s);
         }
         if ($request->bt){
             $query->where('country_id','=',(int)$request->c);
         }
            */
//        $jobs = $query->get();

        return view('pages.our_lawyers');

    }


}
