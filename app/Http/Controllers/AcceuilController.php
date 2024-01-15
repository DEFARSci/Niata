<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcceuilController extends Controller
{
    public function index(){

        $voiturevaluation=DB::table('evaluations')->get('marque')->unique();
        // dd($voiturevaluation[0]->marque);
        $data=[
            "marques"=>$voiturevaluation

        ];
        return view('welcome', $data);
    }
}
// véhicule, la marque, le modèle, l'année, le type de
//carburant, le kilométrage et la boîte de vitesse.
