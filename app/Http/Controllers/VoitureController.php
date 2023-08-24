<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{

    public function index(){
        $voiture=Voiture::all();

        $data=[
            'voiture'=>$voiture,
        ];

        return view('voiture.index',$data);
    }
    public function create(){
        return view('voiture.create');
    }


    public function store(Request $request){


        $request->validate([
            'marque'=>'required',
            'modele'=>'required',
            'annee'=>'required',
            'kilometrage'=>'required',
            'etat'=>'required',
            'moteur'=>'required',
            'boite'=>'required',
            'caracteristique'=>'required',
            'prix'=>'required',
            'image'=>'required',



        ]);


        $voiture=new Voiture();
        $voiture->marque=$request->marque;
        $voiture->modele=$request->modele;
        $voiture->annee=$request->annee;
        $voiture->kilometrage=$request->kilometrage;
        $voiture->etat=$request->etat;
        $voiture->moteur=$request->moteur;
        $voiture->boite=$request->boite;
        $voiture->caracteristique=$request->caracteristique;
        $voiture->prix=$request->prix;

        $image = $request->image;
        //dd( $image );
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        //$imagePath = public_path( '/voiture' . $imageName );
        $image->move( public_path( '/voiture' ), $imageName );
        $voiture->image = $imageName;

        $voiture->save();

        return back()->with( 'success', 'Article Ajouter' );
       
    }

    public function show($id){
        $voiture=Voiture::find($id);

        $data=[
            'voiture'=>$voiture
        ];
        return view('voiture.show',$data);
    }
}
