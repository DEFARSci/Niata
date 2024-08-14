<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcceuilController extends Controller
{
    public function index(){

        $alluser=User::all();
        if($alluser->count()==0){
         $user = new User();
         $user->name='admin';
         $user->email='admin@niata.com';
         $user->password=bcrypt('admin');
         $user->save();
        }
        $voiturevaluation = DB::table('evaluations')
    ->whereNull('message') // Filtrer les lignes où le message est null
    ->get('marque') // Récupérer uniquement la colonne 'marque'
    ->unique(); // Rendre les résultats uniques
        //   dd($voiturevaluation);
        $data=[
            "marques"=>$voiturevaluation

        ];

        return view('welcome', $data);
    }
}
// véhicule, la marque, le modèle, l'année, le type de
//carburant, le kilométrage et la boîte de vitesse.
