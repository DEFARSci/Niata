<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Carressol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller {
    public function index() {

        $blog = Blog::all();

        $images=DB::table( 'carressols' )
        ->orderBy('created_at', 'desc')
        ->limit(3)
        ->get();
//         dd(count($images));
//   dd(get_object_vars($images));

        return view( 'blog.index', compact( 'blog','images' ) );
    }

    public function create() {
        return view( 'blog.create' );
    }

    public function store( Request $request ) {
$request->validate( [
    'titre' => 'required',
    'content' => 'required',
    'image' => 'required',
]);

        $blog = new Blog();
        $blog->titre = $request->titre;
        $blog->content = $request->content;

        $image = $request->image;
        //dd( $image );
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = public_path( 'images/' . $imageName );
        $image->move( public_path( 'images' ), $imageName );
        $blog->image = $imageName;
        $blog->save();

        return back()->with( 'success', 'Article Ajouter' );

    }

    public function show( $id ) {
        $blogs =DB::table( 'blogs' )
        ->where( 'id','!=', $id )
        ->orderBy('created_at', 'desc')
        ->limit(3)
        ->get();

       
        $blog = Blog::find( $id );
    return view('blog.show', compact('blog',"blogs" ) );
    }
}