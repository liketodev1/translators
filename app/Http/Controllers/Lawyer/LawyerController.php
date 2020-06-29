<?php


namespace App\Http\Controllers\Lawyer;


use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Models\Country;
use App\Models\Language;
use App\Models\LanguageLevel;
use App\Models\LanguageLevelUser;
use App\Models\Specializations;
use App\Services\FileSystemService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class LawyerController extends Controller
{
    public function index()
    {
        $specializations = Specializations::orderBy('name', 'asc')->get();
        $languages = Language::orderBy('name', 'asc')->get();
        $languageLevels = LanguageLevel::orderBy('name', 'asc')->get();
        $country = Country::orderBy('name','asc')->get();

        return view('lawyer.pages.profile',
            array(
                'specializations' => $specializations,
                'languages' => $languages,
                'languageLevels' => $languageLevels,
                'country' => $country,
            )
        );
    }

    public function profile(Request $request, FileSystemService $fileSystemService)
    {
        $user = Auth::user();
        /* ********  Profile create or update ******* */

        $validator = Validator::make($request->all(), [
            'specialization' => ['required'],
            'profile.linkedin' => ['sometimes','required_without:url'],
            'profile.biography' => ['required', 'max:750'],
            'profile.experience' => ['required', 'digits_between:1,2'],
            'profile.country_id' => ['required'],
            'profile.state' => ['required'],
            'profile.city' => ['required'],
            'profile.address' => ['required'],
            'profile.rate' => ['required'],
            'resume' => ['mimes:pdf,doc,docx'],
            'certificates.*' => ['mimes:pdf,png,jpg,jpeg'],
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
                    'linkedin' => $validator->errors()->get('profile.linkedin'),
                    'biography' => $validator->errors()->get('profile.biography'),
                    'experience' => $validator->errors()->get('profile.experience'),
                    'rate' => $validator->errors()->get('profile.rate'),
                    'resume' => $validator->errors()->get('resume'),
                    'certificate' => $validator->errors()->get('certificates.0'),
                    'full' => $validator->errors()->messages(),
                ]

            ]);
        }


        $certificates = $request->file('certificates');

        if ($certificates) {
            $certificatePaths = $fileSystemService->uploadMultiple($certificates, 'certifications');
            foreach ($certificatePaths as $certificatePath) {
                $certificate = new Certification();
                $certificate->user_id = $user->id;
                $certificate->path = $certificatePath;
                $certificate->save();
            }
        }

        if ($request->input('delete_certificate')) {
            $ids = explode(',', trim($request->input('delete_certificate'), ','));
            foreach (Certification::find($ids) as $item) {
                Storage::disk('public')->delete($item->path);
            }
            Certification::destroy($ids);
        }

        $lluId = $request->get('lluId');
        $language = $request->get('language');
        $languageLevel = $request->get('languageLevel');

        LanguageLevelUser::destroy(explode(',', trim($request->get('delLang'), ',')));

        if ($language && count($language)) {
            foreach ($language as $key => $value) {
                if (isset($lluId[$key])) {
                    $arr = ['id' => $lluId[$key]];
                } else {
                    $arr = ['id' => null];
                }

                $user->languageLevel()->updateOrCreate($arr,
                    [
                        'language_id' => (int)$value,
                        'language_level_id' => (int)$languageLevel[$key],
                    ]
                );
            }
        }

        $user->specializations()->sync($request->get('specialization'));

        /* ********  Profile create or update ******* */
        $profile = $request->get('profile');
        $resume = $fileSystemService->fileUpload(
            $request->file('resume'),
            isset($user->profile) ? $user->profile->resume : null,
            'resume'
        );
        $profile['resume'] = $resume;

        $user->profile()->updateOrCreate(['user_id' => $user->id], $profile);

        $responseMessage = 'Data updated successfully';

        if (!isset($user->profile)) {
            $responseMessage = 'Thank you  we are reviewing your profile, will get in touch with you soon';
        }

        return response()->json(array(
            'success' => true,
            'message' => $responseMessage,
        ));

    }
}
