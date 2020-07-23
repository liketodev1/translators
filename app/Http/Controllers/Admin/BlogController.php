<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Tag;
use App\Services\FileSystemService;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BlogController extends Controller
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
        $results = Blog::paginate(15);
        return view('admin.pages.blog.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        $tags = Tag::orderby('name','asc')->get();

        return view('admin.pages.blog.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->slug = Str::slug($request->slug, '-');

        $validatedData = $request->validate([
            'slug'=> 'required|min:3|max:255|unique:blogs,slug',
            'type' => 'required',
            'title' => 'required|min:3|max:255',
            'short_text' => 'required|min:3|max:300',
            'description' => 'required|min:3',
            'author' => 'required|max:30',
            'published_at' => 'required'
        ]);
        $file = $request->file('image');

        if ($request->file('image')){
            $validatedData['image'] = $this->fileSystemService->fileUpload($file,'','images');
        }

        $validatedData['slug'] = Str::slug($validatedData['slug'], '-');
        $validatedData['status'] = isset($request['status'])?true:false;
        $blog = Blog::create($validatedData);
        $blog->tags()->sync($request->tag);
        return redirect()->route('admin.blog.index')->with('success', $request->title . ' created successfully');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Factory|View
     */
    public function edit($id)
    {
        $tags = Tag::orderby('name','asc')->get();
        $result = Blog::findorFail($id);
        return view('admin.pages.blog.edit',compact('result','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Blog $blog
     * @return RedirectResponse
     */
    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'slug'=> "required|min:3|max:255|unique:blogs,slug,{$blog->slug},slug",
            'type' => 'required',
            'title' => 'required|min:3|max:255',
            'short_text' => 'required|min:3|max:300',
            'description' => 'required|min:3',
            'author' => 'required',
            'published_at' => 'required'
        ]);
        $file = $request->file('image');

        if ($request->file('image')){
            $validatedData['image'] = $this->fileSystemService->fileUpload($file,$blog->image,'images');
        }
        $validatedData['slug'] = Str::slug($validatedData['slug'], '-');
        $validatedData['status'] = isset($request['status'])?true:false;
        $blog->tags()->sync($request->tag);
        $blog->update($validatedData);

        return redirect()->route('admin.blog.edit',['blog'=>$blog])->with('success', $blog->title . ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Blog $blog)
    {
        Storage::disk('public')->delete("{$blog->image}");
        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success','Deleted successfully');

    }
}
