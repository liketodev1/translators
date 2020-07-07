<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\LegalAreas;
use App\Models\Specializations;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $specializations = Specializations::orderBy('name','asc')->get();
        $countries = Country::orderBy('name','asc')->get();
        $legal_areas = LegalAreas::orderBy('position','asc')->get();

        return view('home',
            array(
                'specializations' => $specializations,
                'countries' => $countries,
                'legal_areas' => $legal_areas,
            )
        );
    }
}
