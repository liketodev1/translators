<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::where('status',true)->paginate(8);
        return view('blog.index',compact('blogs'));
    }

    public function view($slug){
        $blog  = Blog::where('slug',$slug)->firstOrFail();
        $blogs = Blog::where('type',$blog->type)
            ->where('id','<>',$blog->id)
            ->where('status',true)
            ->take(2)
            ->get();

        return view('blog.view',compact('blog','blogs'));
    }
}
