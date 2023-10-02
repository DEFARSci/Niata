<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Services\VoitureEvaluationService;

class EvaluationController extends Controller
{
    public function index(){
        return view('evaluation.index');
    }

    public function voiture(Request $request){
        setlocale(LC_TIME, 'fr_FR');

        $request->validate([
            'marque' => 'required',
            'model' => 'required',
            'annee' => 'required',
            'kilometre' => 'required',
            'carburant' => 'required',
            'boite' => 'required',
            'email' => 'required|email',
        ]);

        $data = $request->all();

        $voitureEvaluation=DB::table('evaluations')
                           ->where('marque','like','%'.$data['marque'].'%')
                           ->Where('modele','like','%'.$data['model'].'%')
                           ->get();

        $voiturerecup=new Evaluation();
        foreach($voitureEvaluation as $voiture){
            $voiturerecup->marque=$voiture->marque;
            $voiturerecup->modele=$voiture->modele;
            $voiturerecup->annee=$voiture->annee;
            $voiturerecup->kilometrage=$voiture->kilometrage;
            $voiturerecup->type_carburant=$voiture->type_carburant;
            $voiturerecup->boite=$voiture->boite;
            $voiturerecup->prix=$voiture->prix;
        }
      // dd($voiturerecup);

        $prixestimatif=(new VoitureEvaluationService)->VoitureEvaluation($voiturerecup,$data['kilometre'],$data['annee'],$data['carburant'],$data['boite']);
       

        $mail_data=[
            'prix'=>$prixestimatif,
            'email' => $data['email'],
            'marque'=>$data['marque'],
            'modele'=>$data['model'],
            'kilometrage'=>$data['kilometre'],
            'annee'=>$data['annee'],
            'carburant'=>$data['carburant'],
            'boite'=>$data['boite'],
            'subject'=>'Evaluation prix voiture',
            'recipient'=>'admin@niata.com',
            'date'=>Carbon::now()->formatLocalized('%A %d %B'),
        ];

        Mail::send('mail.evaluation',$mail_data,function($message)use($mail_data){
            $message->to($mail_data['email'])
                    ->from($mail_data['recipient'])
                    ->subject($mail_data['subject']);
        });
      return back()->with('success','Evaluation enregistrée avec succès un email vous sera envoyer');

    }

       
    
}
