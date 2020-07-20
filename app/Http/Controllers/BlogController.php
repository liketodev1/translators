<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::where('status',true)->paginate(8);
        return view('blog.index',compact('blogs'));
    }

    public function view($slug){
        $blog = Blog::where('slug',$slug)->firstOrFail();
        return view('blog.view',compact('blog'));
    }
}
