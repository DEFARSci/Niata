<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcceuilController extends Controller
{
    public function index(){
        $voiture =DB::table( 'voitures' )
        ->orderBy('created_at', 'desc')
        ->limit(3)
        ->get();



        $blog =DB::table( 'blogs' )
        ->orderBy('created_at', 'desc')
        ->limit(3)
        ->get();

        $voiture=Voiture::all();
        $data=[
            "blog" =>$blog,
            "voiture" =>$voiture,
            'voiture'=>$voiture,
            'rechercher'=>$voiture
        ];
        return view('welcome', $data);
    }
}
// véhicule, la marque, le modèle, l'année, le type de
//carburant, le kilométrage et la boîte de vitesse.