<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $results = ContactUs::orderBy('created_at','desc')->paginate(15);
        return view('admin.pages.contact_us.index',compact('results'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function show($id)
    {
        $result = ContactUs::findOrFail($id);
        $result->status = true;
        $result->save();
        return view('admin.pages.contact_us.view',compact('result'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        ContactUs::destroy($id);
        return redirect()->route('admin.contact-messages.index')->with('success', 'Item deleted successfully');
    }
}
