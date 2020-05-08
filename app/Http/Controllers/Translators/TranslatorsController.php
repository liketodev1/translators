<?php

namespace App\Http\Controllers\Translators;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Models\LanguageUser;
use App\Models\Options;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use function GuzzleHttp\Promise\all;

class TranslatorsController extends Controller
{

    public function index()
    {

        $industrySpecialization = Options::where('type', '=', Options::INDUSTRY_SPECIALIZATION)->orderBy('name', 'asc')->get();
        $specialization = Options::where('type', '=', Options::SPECIFICATION)->orderBy('name', 'asc')->get();
        $language = Options::where('type', '=', Options::LANGUAGE)->orderBy('name', 'asc')->get();

        return view('translators.pages.profile',
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
        $linkedin = $request->input('linkedin');
        $resume = $request->file('resume');
        $biography = $request->input('biography');
        $resumePath = null;
        $experience = $request->input('experience');
        $public_sector = $request->input('public_sector')? true :false;
        $private_sector = $request->input('private_sector')? true :false;
        $education = $request->input('education')? true :false;
        $certificates = $request->file('certificates');
        $lang_from = $request->input('lang_from');
        $lang_to = $request->input('lang_to');
        $slow = $request->input('slow');
        $standard = $request->input('standard');
        $urgent = $request->input('urgent');
        $langIds = $request->input('langId');
        $deleteLangs = $request->input('deleteLangs');


        if ($deleteLangs){
            LanguageUser::destroy( explode(',',trim($deleteLangs,',')));
        }
        if (count($lang_from)>0){
            foreach ($lang_from as $key => $val)
            {
                $id = ['id' => null];
                if ($langIds[$key]){
                    $id = ['id'=>$langIds[$key]];
                }

                LanguageUser::updateOrCreate($id,[
                    'user_id' => $user->id,
                    'lang_from_id' => $val,
                    'lang_to_id' => $lang_to[$key],
                    'slow' => $slow[$key],
                    'standard' => $standard[$key],
                    'urgent' => $urgent[$key],
                ]);
            }
        }

        if ($resume){
            $resumePath = $resume->store('resume','public');
        }

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

        if (!$user->profile) {

            $user->profile()->create([
                'linkedin' => $linkedin,
                'resume' => $resumePath,
                'biography' => $biography,
                'experience' => $experience,
                'public_sector' => $public_sector,
                'private_sector' => $private_sector,
                'education' => $education,
            ]);

        } else {

            if ($resumePath){
                Storage::disk('public')->delete($user->profile->resume);
                $user->profile->resume = $resumePath;
            }

            $user->profile->linkedin = $linkedin;
            $user->profile->biography = $biography;
            $user->profile->experience = $experience;
            $user->profile->public_sector = $public_sector;
            $user->profile->private_sector = $private_sector;
            $user->profile->education = $education;
            $user->profile->save();

        }

        return redirect()->route('translator_profile')->with('success','Success');

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
