<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Options;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OptionsController extends Controller
{
    const LANGUAGE = 1;
    const SPECIFICATION = 2;
    const INDUSTRY_SPECIALIZATION = 3;

    private $type;
    private $title;
    private $type_name;

    public function __construct(Request $request)
    {
        $this->type = $request->get('type');
        if ((int)$this->type === self::LANGUAGE){
            $this->title = 'Languages';
            $this->type_name = 'LANGUAGE';
        }else if ((int)$this->type === self::INDUSTRY_SPECIALIZATION){
            $this->title = 'Industry Specialization';
            $this->type_name = 'INDUSTRY_SPECIALIZATION';
        }else{
            $this->title = 'Specification';
            $this->type_name = 'SPECIFICATION';
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        if ($this->type){
            $options = Options::where('type','=',$this->type)->orderBy('name','asc')->paginate(15);

            return view('admin.pages.options.index',
                array(
                    'title' => $this->title,
                    'type' => $this->type,
                    'options' => $options
                )
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.pages.options.create',
            array(
                'title' => $this->title,
                'type' => $this->type,
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $option = new Options();
        $option->name = $request->input('name');
        $option->type = $this->type;
        $option->type_name = $this->type_name;
        $option->save();

        return redirect()->route('admin.options.create',['type'=>$this->type])->with('success',"{$option->name} created successfully");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function edit($id)
    {
        $option = Options::find($id);
        return  view('admin.pages.options.edit',[
            'title' => $this->title,
            'type' => $this->type,
            'option' => $option
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $option = Options::find($id);
        $option->name = $request->input('name');
        $option->save();

        return redirect()->route('admin.options.index',['type'=>$this->type])->with('success',"{$option->name} update successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Options::destroy($id);

        return redirect()->route('admin.options.index')->with('info',"{$this->title} deleted successfully");
    }
}
