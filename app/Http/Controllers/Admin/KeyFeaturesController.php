<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KeyFeatures;
use App\Services\FileSystemService;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KeyFeaturesController extends Controller
{
    /**
     * @var FileSystemService
     */
    private $fileSystemService;

    public function __construct(FileSystemService $fileSystemService)
    {
        $this->fileSystemService = $fileSystemService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $results = KeyFeatures::paginate(15);
        return view('admin.pages.key_features.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.pages.key_features.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'short_text' => 'required',
            'icon' => 'required',
            'image' => 'required',
        ]);
        $validatedData['icon'] = $this->fileSystemService->fileUpload($request->file('icon'), '', 'images');
        $validatedData['image'] = $this->fileSystemService->fileUpload($request->file('image'), '', 'images');
        KeyFeatures::create($validatedData);
        return redirect()->route('admin.key_features.index')->with('success', $validatedData['title'] . ' created successfully');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param KeyFeatures $keyFeature
     * @return Factory|View
     */
    public function edit(KeyFeatures $keyFeature)
    {
        $result = $keyFeature;
        return view('admin.pages.key_features.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param KeyFeatures $keyFeature
     * @return RedirectResponse
     */
    public function update(Request $request, KeyFeatures $keyFeature)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'short_text' => 'required',
        ]);
        if ($request->file('icon')) {
            $validatedData['icon'] = $this->fileSystemService->fileUpload($request->file('icon'), $keyFeature->icon, 'images');
        }
        if ($request->file('image')) {
            $validatedData['image'] = $this->fileSystemService->fileUpload($request->file('image'), $keyFeature->image, 'images');
        }
        $keyFeature->update($validatedData);
        return redirect()->route('admin.key_features.edit', ['key_feature' => $keyFeature->id])
            ->with('success', $keyFeature->title . ' updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param KeyFeatures $keyFeature
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(KeyFeatures $keyFeature)
    {
        $this->fileSystemService->fileDelete($keyFeature->icon);
        $this->fileSystemService->fileDelete($keyFeature->image);
        $keyFeature->delete();
        return redirect()->route('admin.key_features.index')
            ->with('success', 'Item deleted successfully');
    }
}
