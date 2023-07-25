<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategorieArticle;

class CategieArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categieArticle = CategorieArticle::all();
        return view("categorie.index",compact("categieArticle"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'categorie' => 'required',
        ]);

        $categieArticle = new CategorieArticle();
        $categieArticle->categorie=$request->categorie;
        $categieArticle->save(); 
        return redirect()->back()->with('success','Categorie Article created successfully.');
       }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategieArticle  $categieArticle
     * @return \Illuminate\Http\Response
     */
    public function show(CategorieArticle $categieArticle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategieArticle  $categieArticle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categieArticle=CategorieArticle::find($id);
        return view('categorie.edit',compact('categieArticle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategieArticle  $categieArticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'categorie' => 'required',
        ]);
        $categieArticle = CategorieArticle::find($request->id);
        $categieArticle->categorie=$request->categorie;
        $categieArticle->save();
        return redirect("/categorie")->with('success','Categorie Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategieArticle  $categieArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categieArticle = CategorieArticle::find( $id );
        $categieArticle->delete();
        return back()->with( 'success', 'Article Supprimer' );
    }
}
