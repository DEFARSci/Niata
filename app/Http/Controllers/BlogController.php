<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Carressol;
use Illuminate\Http\Request;

class BlogController extends Controller {
    public function index() {

        $blog = Blog::all();

  $images = Carressol::all();
        return view( 'blog.index', compact( 'blog','images' ) );
    }

    public function create() {
        return view( 'blog.create' );
    }

    public function store( Request $request ) {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->text = $request->content;

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
        $blog = Blog::find( $id );
        // Supposons que votre modèle s'appelle "Article"
    return view('blog.show', compact('blog' ) );
    }
}
