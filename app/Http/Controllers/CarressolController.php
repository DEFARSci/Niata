<?php

namespace App\Http\Controllers;

use App\Models\Carressol;
use Illuminate\Http\Request;

class CarressolController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
      

        

    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        return view( 'carressols.create' );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {


        $validatedData = $request->validate( [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ] );

        $images = new Carressol();
       
         $image = $request->image;

         /* dd($image); */
         $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = public_path( 'carressol/' . $imageName );
        $image->move( public_path( 'carressol' ), $imageName );
         $images->image = $imageName;
         $images->save();      

        return back()->with( 'success', 'Image ajoutée avec succès.' );

    
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Carressol  $carressol
    * @return \Illuminate\Http\Response
    */

    public function show( Carressol $carressol ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Carressol  $carressol
    * @return \Illuminate\Http\Response
    */

    public function edit( Carressol $carressol ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Carressol  $carressol
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Carressol $carressol ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Carressol  $carressol
    * @return \Illuminate\Http\Response
    */

    public function destroy( Carressol $carressol ) {
        //
    }
}
