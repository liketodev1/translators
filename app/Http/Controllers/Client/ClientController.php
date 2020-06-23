<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Language;
use App\Models\LanguageLevel;
use App\Models\Specializations;
use App\Models\UserAddress;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index()
    {
        $specializations = Specializations::orderBy('name', 'asc')->get();
        $languages = Language::orderBy('name', 'asc')->get();
        $languageLevels = LanguageLevel::orderBy('name', 'asc')->get();
        $country = Country::orderBy('name','asc')->get();
        return view('client.pages.profile',
            array(
                'specializations' => $specializations,
                'languages' => $languages,
                'languageLevels' => $languageLevels,
                'country' => $country,
            )
        );
    }

    public function profile(Request $request){
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'specialization' => ['required'],
//            'profile.experience' => ['required', 'digits_between:1,2'],
            'profile.country' => ['required'],
            'profile.state' => ['required'],
            'profile.city' => ['required'],
            'profile.address' => ['required'],
//            'profile.rate' => ['required'],
//            'resume' => ['mimes:pdf,doc,docx'],
//            'certificates.*' => ['mimes:pdf,png,jpg,jpeg'],
        ]);

        if ($validator->fails()) {
//            return  $validator->getMessageBag()->toArray();
            return new JsonResponse([
                'success' => false,
                'message' => [
                    'specialization' => $validator->errors()->get('specialization'),
                    'country' => $validator->errors()->get('profile.country'),
                    'state' => $validator->errors()->get('profile.state'),
                    'city' => $validator->errors()->get('profile.city'),
                    'address' => $validator->errors()->get('profile.address'),
//                    'rate' => $validator->errors()->get('profile.rate'),
//                    'resume' => $validator->errors()->get('resume'),
//                    'certificate' => $validator->errors()->get('certificates.0'),
//                    'full' => $validator->errors()->messages(),
                ]

            ]);
        }

        $user->specializations()->sync($request->get('specialization'));

        $responseMessage = 'Data updated successfully';

        return response()->json(array(
            'success' => true,
            'message' => $responseMessage,
        ));

    }
}
