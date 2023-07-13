<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $blog=Blog::all();

       
        return view('blog.index',compact('blog'));
    }
    public function create(){
        return view('blog.create');
    }
    public function store(Request $request){
        $blog=new Blog();
        $blog->title=$request->title;
        $blog->text=$request->content;

        $image = $request->image;
        //dd($image);
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = public_path('images/' . $imageName);
        $image->move(public_path('images'), $imageName);
        $blog->image=$imageName;
        $blog->save();
        
        return back()->with('success','Article Ajouter');
        
    }
}
