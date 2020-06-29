<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Language;
use App\Models\LanguageLevel;
use App\Models\LanguageLevelUser;
use App\Models\PostLanguageLevel;
use App\Models\Specializations;
use App\Models\UserPost;
use DateTime;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $posts = UserPost::where('deleted_at','=',null)
            ->where('status',true)
            ->orderBy('created_at','desc')
            ->get();

        return view('client.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        $specializations = Specializations::orderBy('name', 'asc')->get();
        $country = Country::orderBy('name','asc')->get();
        $languages = Language::orderBy('name', 'asc')->get();
        $languageLevels = LanguageLevel::orderBy('name', 'asc')->get();
        return view('client.post.create',
            array(
                'specializations' => $specializations,
                'country' => $country,
                'languages' => $languages,
                'languageLevels' => $languageLevels,
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return string
     */
    public function store(Request $request)
    {
        $request->validate([
            'specialization' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'billing_type' => 'required',
            'price' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $user = Auth::user();

        $lluId = $request->get('lluId');
        $language = $request->get('language');
        $languageLevel = $request->get('languageLevel');

        $post = new UserPost();
        $post->user_id = $user->id;
        $post->specialization_id = $request->specialization;
        $post->country_id = $request->country;
        $post->state = $request->state;
        $post->city = $request->city;
        $post->address = $request->address;
        $post->billing_type = $request->billing_type;
        $post->price = $request->price;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        if ($language && count($language)) {
            foreach ($language as $key => $value) {
                $post->languageLevel()->create(
                    [
                        'language_id' => (int)$value,
                        'language_level_id' => (int)$languageLevel[$key],
                    ]
                );
            }
        }
        return redirect()->route('post.index')->with('success','Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function show($id)
    {
        $post = UserPost::where('id','=',$id)
                    ->where('user_id','=',auth()->user()->id)
                    ->where('deleted_at',null)
                    ->firstOrFail();

        return view('client.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function edit($id)
    {
        $post = UserPost::where('id','=',$id)
            ->where('user_id','=',auth()->user()->id)
            ->where('deleted_at',null)
            ->firstOrFail();

        $specializations = Specializations::orderBy('name', 'asc')->get();
        $country = Country::orderBy('name','asc')->get();
        $languages = Language::orderBy('name', 'asc')->get();
        $languageLevels = LanguageLevel::orderBy('name', 'asc')->get();

        return view('client.post.edit',compact('post','specializations','country','languages','languageLevels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'specialization' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'billing_type' => 'required',
            'price' => 'required',
            'description' => 'required',
            'title' => 'required',
        ]);

        $user = Auth::user();

        $post = UserPost::where('id','=',$id)
            ->where('user_id','=',$user->id)
            ->firstOrFail();

        $lluId = $request->get('lluId');
        $language = $request->get('language');
        $languageLevel = $request->get('languageLevel');

        PostLanguageLevel::destroy(explode(',', trim($request->get('delLang'), ',')));

        if ($language && count($language)) {
            foreach ($language as $key => $value) {
                if (isset($lluId[$key])) {
                    $arr = ['id' => $lluId[$key]];
                } else {
                    $arr = ['id' => null];
                }

                $post->languageLevel()->updateOrCreate($arr,
                    [
                        'language_id' => (int)$value,
                        'language_level_id' => (int)$languageLevel[$key],
                    ]
                );
            }
        }

        $post->specialization_id = $request->specialization;
        $post->country_id = $request->country;
        $post->state = $request->state;
        $post->city = $request->city;
        $post->address = $request->address;
        $post->billing_type = $request->billing_type;
        $post->price = $request->price;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('post.edit',['post'=>$id])->with('success','Post update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return string
     * @throws \Exception
     */
    public function destroy($id)
    {
        $post = UserPost::where('id','=',$id)
            ->where('user_id','=',auth()->user()->id)
            ->firstOrFail();

        $post->deleted_at = new DateTime();
        $post->save();

        return  redirect()->route('post.index')->with('info','Post deleted');
    }
}
