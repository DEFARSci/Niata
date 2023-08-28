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
            'rechercher'=>$voiture
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

    public function chercheByMarque(Request $request){
        $marque=$request->marque;
        $modele=$request->modele;
        $annee=$request->annee;
        $boite=$request->boite;
        $moteur=$request->moteur;
        $voiture1=Voiture::all();
        // $voiture=Voiture::where('marque',$request->marque)->get();
        $voiturecherche=Voiture::all();

        $voiture=Voiture::when($marque != null,function($query) use($marque){
            return $query->where('marque',$marque);
                 })
                 ->when($modele != null,function($query) use($modele){
                    return $query->where('modele',$modele);
                 })
                 ->when($annee != null,function($query) use($annee){
                    return $query->where('annee',$annee);
                 })
                 ->when($boite != null,function($query) use($boite){
                    return $query->where('boite',$boite);
                 })
                 ->when($moteur != null,function($query) use($moteur){
                    return $query->where('moteur',$moteur);
                 })
                
                 ->get();

               



        $data=[
            'voiture'=>$voiture,
            'marque'=>$marque,
            'voiturecherche'=>$voiturecherche,
            'rechercher'=>$voiture1,
            
        ];

        return view('voiture.index',$data);
    }
}
