<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Carressol;
use App\Models\CategorieArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller {
    public function index() {

        $blog = Blog::all();

        // foreach ($blog as $blog) {
        //    dd($blog->categie_articles());
        // }

        $images=DB::table( 'carressols' )
        ->orderBy('created_at', 'desc')
        ->limit(3)
        ->get();
//         dd(count($images));
//   dd(get_object_vars($images));

        return view( 'blog.index', compact( 'blog','images' ) );
    }

    public function create() {
        $categorie=CategorieArticle::all();

        $data=[
            'categorie'=>$categorie,

        ];

        return view( 'blog.create',$data );
    }

    public function store( Request  $request ) {
$request->validate( [
    'titre' => 'required',
    'content' => 'required',
    'image' => 'required',
    'categorie'=>'required',

]);

        $blog = new Blog();
        $blog->titre = $request->titre;
        $blog->content = $request->content;
        $blog->categorie_articles_id = $request->categorie;

        //  dd($blog);

        $image = $request->image;
        //dd( $image );
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        //$imagePath = public_path( 'images/' . $imageName );
        $image->move( public_path( 'blog' ), $imageName );
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
// dd($blog);
        // $blogforcathe=CategorieArticle::find(1);
        // dd($blogforcathe);

    return view('blog.show', compact('blog',"blogs" ) );
    }

    public function edit( $id ) {

        $blog = DB::table('blogs')
    ->join('categorie_articles', 'blogs.categorie_articles_id', '=', 'categorie_articles.id')
    ->where('blogs.id','=',$id)
    ->select('blogs.*','categorie_articles.*')
    ->get();
        $categorie=CategorieArticle::all();

        $data=[
            'categorie'=>$categorie,
            'blog'=>$blog[0],
        ];
        return view( 'blog.edit', $data );
    }

    public function update( Request $request ) {
    //  dd((int)$request->id);
        $blog = Blog::find((int)$request->id);
        $blog->titre = $request->titre;
        $blog->content = $request->content;
        $blog->categorie_articles_id = $request->categorie;
if(isset($request->image)){
    $image = $request->image;
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $image->move( public_path( 'blog' ), $imageName );
    $blog->image = $imageName;
}

        $blog->save();
        return back()->with( 'success', 'Article Modifier' );
    }

    public function destroy( $id ) {
        $blog = Blog::find( $id );
        $blog->delete();
        return back()->with( 'success', 'Article Supprimer' );
    }
}
