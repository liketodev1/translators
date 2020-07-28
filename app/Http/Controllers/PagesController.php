<?php


namespace App\Http\Controllers;


use App\Models\ContactUs;
use App\Models\Country;
use App\Models\KeyFeatures;
use App\Models\LegalAreas;
use App\Models\PrivacyPolicy;
use App\Models\Specializations;
use App\Models\Term;
use App\Models\User;
use App\Models\UserPost;
use ConstUserRole;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
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
        $specializations = Cache::remember('specializations', null, function () {
            return Specializations::orderBy('name', 'asc')->get();
        });
        $countries = Cache::remember('countries', null, function () {
            return Country::orderBy('name', 'asc')->get();
        });
        $legal_areas = Cache::remember('legal_areas', null, function () {
            return LegalAreas::orderBy('position', 'asc')->get();
        });
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

        $jobs->load(['country', 'specialization', 'languageLevel']);

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

        $specializations = Cache::remember('specializations', null, function () {
            return Specializations::orderBy('name', 'asc')->get();
        });
        $countries = Cache::remember('countries', null, function () {
            return Country::orderBy('name', 'asc')->get();
        });
        $legal_areas = Cache::remember('legal_areas', null, function () {
            return LegalAreas::orderBy('position', 'asc')->get();
        });

        $query = User::where('role', ConstUserRole::ROLE_LAWYER)
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
        ;

        if ($request->s) {
            $query
                ->join('specializations as s', function ($join) use ($request) {
                    $join->where('s.id', '=', "$request->s");
                })
                ->join('specialization_user as su', function ($join) {
                    $join->on('su.specialization_id', '=', 's.id');
                    $join->on('su.user_id', '=', 'users.id');
                })
            ;
        }
        $query->select(['users.*']);

        $users = $query->paginate(15);
        $users->load(['specializations', 'profile', 'languageLevel', 'profile.country']);

        return view('pages.our_lawyers', compact(
            'users',
            'specializations',
            'countries',
            'legal_areas'
        ));
    }

    public function contactUs()
    {
        return view('pages.contact_us');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function createContactMessage(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        ContactUs::create($validated);
        return redirect()->route('contact_us')->with('success', 'Message send');
    }

    public function keyFeatures()
    {
        $features = KeyFeatures::orderBy('title', 'asc')->get();

        return view('pages.key_features', compact('features'));
    }
}
