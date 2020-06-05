<?php


namespace App\Http\Controllers\Lawyer;


use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Models\LanguageUser;
use App\Models\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\JsonResponse;

class LawyerController extends Controller
{
    public function index()
    {
        $industrySpecialization = Options::where('type', '=', Options::INDUSTRY_SPECIALIZATION)->orderBy('name', 'asc')->get();
        $specialization = Options::where('type', '=', Options::SPECIFICATION)->orderBy('name', 'asc')->get();
        $language = Options::where('type', '=', Options::LANGUAGE)->orderBy('name', 'asc')->get();

        return view('lawyer.pages.profile',
            array(
                'industrySpecialization' => $industrySpecialization,
                'specialization' => $specialization,
                'language' => $language,
            )
        );
    }

    public function profile(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'specializations' => ['required'],
//            'specifications' => ['required'],
//            'profile.linkedin' => ['required_without:url'],
            'profile.biography' => ['required','max:150'],
            'profile.experience' => ['required','digits_between:1,2'],
            'lang_from.*' => ['required'],
            'lang_to.*' => ['required'],
            'slow.*' => ['required'],
            'standard.*' => ['required'],
            'urgent.*' => ['required'],
            'resume' => ['mimes:pdf,doc,docx'],
            'certificates.*' => ['mimes:pdf,png,jpg,jpeg'],
        ]);

        if ($validator->fails()){

            return new JsonResponse([
                'success' => false,
                'message' => [
                    'specialization' => $validator->errors()->get('specializations'),
//                    'specification' => $validator->errors()->get('specifications'),
//                    'linkedin' => $validator->errors()->get('profile.linkedin'),
                    'biography' => $validator->errors()->get('profile.biography'),
                    'experience' => $validator->errors()->get('profile.experience'),
                    'resume' => $validator->errors()->get('resume'),
                    'certificate' => $validator->errors()->get('certificates.0'),
                    'full' => $validator->errors()->messages(),
                ]

            ]);
        }


        $profile = $request->input('profile');
        $resume = $request->file('resume');

        $certificates = $request->file('certificates');
//        $lang_from = $request->input('lang_from');
//        $lang_to = $request->input('lang_to');
        $slow = $request->input('slow');
        $standard = $request->input('standard');
        $urgent = $request->input('urgent');
        $langIds = $request->input('langId');
        $deleteLangs = $request->input('deleteLangs');


        if ($certificates){

            $certificatePaths = $this->uploadMultiple($certificates);
            foreach ($certificatePaths as $certificatePath) {
                $certificate =  new Certification();
                $certificate->user_id = $user->id;
                $certificate->path = $certificatePath;
                $certificate->save();

            }
        }

        if ($request->input('delete_certificate')){
            $ids = explode(',', trim($request->input('delete_certificate'),','));
            foreach (Certification::find($ids) as $item){
                Storage::disk('public')->delete($item->path);
            }
            Certification::destroy($ids);
        }

        $user->specializations()->sync($request->input('specializations'));
        $user->specifications()->sync($request->input('specifications'));


        // ------------------------------------------//
        //                                           //
        //     Create Update translator profile      //
        //                                           //
        //-------------------------------------------
        $responseMessage = 'Data updated successfully';

        if ($resume){
            $resume = $resume->store('resume','public');
            $profile['resume'] = $resume;
        }

        $profileId = null;
        if ($user->profile){
            $profileId = $user->profile->id;
            if ($resume){
                Storage::disk('public')->delete($user->profile->resume);
            }
        }else{
            $responseMessage = 'Thank you  we are reviewing your profile, will get in touch with you soon';
        }
        $user->profile()->updateOrCreate(['id' => $profileId],$profile);
        return response()->json(array(
            'success' => true,
            'message' => $responseMessage,
        ));
//        return redirect()->route('translator_profile')->with('success',$responseMessage);

    }

    public function uploadMultiple($files)
    {
        $filePaths = [];

        if ($files && count($files)>0){
            foreach ($files as $file) {
                $filePaths[] = $file->store('certificates','public');
            }
        }

        return $filePaths;
    }
}
