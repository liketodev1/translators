<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\LegalAreas;
use App\Models\Specializations;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $specializations = Cache::remember('specializations', null, function () {
            return Specializations::orderBy('name','asc')->get();
        });
        $countries = Cache::remember('countries', null, function () {
            return Country::orderBy('name','asc')->get();
        });
        $legal_areas = Cache::remember('legal_areas', null, function () {
            return LegalAreas::orderBy('position','asc')->get();
        });
//        $specializations = Specializations::orderBy('name','asc')->get();
//        $countries = Country::orderBy('name','asc')->get();
//        $legal_areas = LegalAreas::orderBy('position','asc')->get();

        return view('home',
            array(
                'specializations' => $specializations,
                'countries' => $countries,
                'legal_areas' => $legal_areas,
            )
        );
    }
}
