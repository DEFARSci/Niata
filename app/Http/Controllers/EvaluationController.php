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

       // dd($request->all());

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
                           ->first();

            if ($voitureEvaluation==null) {
                return response()->json([
                    'success' => false,
                    'message' => 'Voiture non disponible',
                ]);
                ;

            }
        $voiturerecup=new Evaluation();
        // foreach($voitureEvaluation as $voiture){
            $voiturerecup->marque=$voitureEvaluation->marque;
            $voiturerecup->modele=$voitureEvaluation->modele;
            $voiturerecup->annee=$voitureEvaluation->annee;
            $voiturerecup->kilometrage=$voitureEvaluation->kilometrage;
            $voiturerecup->type_carburant=$voitureEvaluation->type_carburant;
            $voiturerecup->boite=$voitureEvaluation->boite;
            $voiturerecup->prix=$voitureEvaluation->prix;
        // }
    //    dd($voiturerecup);

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
    //   return view('evaluation.evaluation',$mail_data)->with('success','Evaluation enregistrée avec succès un email vous sera envoyer');
            $data=[
                'data'=>$mail_data
            ];
          return response()->json([
              'success' => true,
              'data' => $mail_data
          ]);

    }

    public function create(){
        return view('evaluation.create');
    }

    public function store(Request $request){
        $request->validate([
            'marque'=>'required',
            'modele'=>'required',
            'annee'=>'required',
            'kilometrage'=>'required',
            'prix'=>'required',
            'type_carburant'=>'required',
            'boite'=>'required',
        ]);
        $voitureEvaluation=new Evaluation();
        $voitureEvaluation->marque=$request->marque;
        $voitureEvaluation->modele=$request->modele;
        $voitureEvaluation->annee=$request->annee;
        $voitureEvaluation->kilometrage=$request->kilometrage;
        $voitureEvaluation->type_carburant=$request->type_carburant;
        $voitureEvaluation->boite=$request->boite;
        $voitureEvaluation->prix=$request->prix;
        $voitureEvaluation->save();
        return back()->with('success','Evaluation enregistrée avec succès');
    }
    public function liste(){
        $voiture=Evaluation::all();
        $nbr=Evaluation::count();
        $data=[
            'voiture'=>$voiture,
            'nbr'=>$nbr
        ];
        return view('evaluation.liste',$data);
    }
    public function destroy($id){
        $voiture=Evaluation::find($id);
        $voiture->delete();
        return back()->with( 'success', 'voiture Supprimer' );
    }
    public function edit($id){
        $voiture=Evaluation::find($id);
        return view('evaluation.edit',compact('voiture'));
    }
    public function update(Request $request){
        $voiture=Evaluation::find($request->id);

        $voiture->marque=$request->marque;
        $voiture->modele=$request->modele;
        $voiture->annee=$request->annee;
        $voiture->kilometrage=$request->kilometrage;
        $voiture->type_carburant=$request->type_carburant;
        $voiture->boite=$request->boite;
        $voiture->prix=$request->prix;
        $voiture->save();

        return redirect('/evaluation/liste')->with( 'success', 'voiture Modifier' );
    }


}
