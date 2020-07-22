<?php


namespace App\Http\Controllers;


use App\Models\Country;
use App\Models\LegalAreas;
use App\Models\PrivacyPolicy;
use App\Models\Specializations;
use App\Models\Term;
use App\Models\User;
use App\Models\UserPost;
use ConstUserRole;
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
        $specializations = Specializations::orderBy('name', 'asc')->get();
        $countries = Country::orderBy('name', 'asc')->get();
        $legal_areas = LegalAreas::orderBy('name', 'asc')->get();
        $ratings = [
            '4.5-5',
            '3.5-4',
            '2.5-3',
            '1.5-2',
            '0.5-1'];

        $query = UserPost::where('deleted_at', '=', null)
            ->where('status', '=', true);
        if ($request->bt) {
            $query->where('billing_type', '=', (int)$request->bt);
        }
        if ($request->s) {
            $query->where('specialization_id', '=', (int)$request->s);
        }
        if ($request->bt) {
            $query->where('country_id', '=', (int)$request->c);
        }
        $jobs = $query->paginate(15);

        $cities = $query->select(['user_posts.city'])->groupBy('user_posts.city')->get();

        return view('pages.find_a_job',
            compact('jobs',
              'specializations',
                'countries',
                'legal_areas',
                'ratings',
                'cities'
            ));

    }

    /**
     * @param Request $request
     * @return Factory|View
     */
    public function ourLawyers(Request $request)
    {
        $query = User::where('role', ConstUserRole::ROLE_LAWYER)
            ->join('specialization_user as su', function ($join) use ($request) {
                $join->on('su.user_id', '=', 'users.id');
                if ($request->s) {
                    $join->where('su.specialization_id', '=', $request->s);
                }
            })
            ->join('lawyer_profiles as lp', function ($join) use ($request) {
                $join->on('lp.user_id', '=', 'users.id');
                if ($request->bt) {
                    $join->where('lp.rate_type', '=', $request->bt);
                }

            })
            ->join('countries as c', function ($join) use ($request) {
                $join->on('c.id', '=', 'lp.country_id');
                if ($request->c) {
                    $join->where('c.id', '=', $request->c);
                }
            })
            ->select(['users.*']);

        $users = $query->get();

        return view('pages.our_lawyers', compact('users'));
    }

}
