<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LegalAreas;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class LegalAreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('admin.pages.legal_areas.index')->with('results', LegalAreas::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.pages.legal_areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'position' => 'required|max:255',
            'name' => 'required',
            'icon' => 'mimes:jpeg,png,jpg,svg',
        ]);

        $legal_area = new LegalAreas();
        $legal_area->position = $request->get('position');
        $legal_area->name = $request->get('name');
        $legal_area->icon = $this->fileUpload($request->file('icon'));
        $legal_area->save();
        return redirect()->route('admin.legal_areas.index')->with('success', $legal_area->name . ' created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Factory|View
     */
    public function show($id)
    {
        return view('admin.pages.legal_areas.edit')->with('result', LegalAreas::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Factory|View
     */
    public function edit($id)
    {
        return view('admin.pages.legal_areas.edit')->with('result', LegalAreas::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $legal_area = LegalAreas::findOrFail($id);
        $legal_area->position = $request->get('position');
        $legal_area->name = $request->get('name');
        $legal_area->icon = $this->fileUpload($request->file('icon'));
        $legal_area->save();

        return redirect()->route('admin.legal_areas.index')->with('success', $legal_area->name . ' updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {

        $legal_area = LegalAreas::find($id);
        $this->fileDelete($legal_area->icon);
        $legal_area->delete();

        return redirect()->route('admin.legal_areas.index')->with('warning', $legal_area->name.' deleted successfully');

    }


    public function fileUpload($file, $oldFile = null)
    {
        $filePath = null;

        if ($file) {
            if ($oldFile) {
                Storage::disk('public')->delete($oldFile);
            }
            $filePath = $file->store('images', 'public');
        } else {
            $filePath = $oldFile;
        }

        return $filePath;
    }

    public function fileDelete($fileName)
    {

        if ($fileName) {
            Storage::disk('public')->delete($fileName);
        }

        return true;
    }

}
