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
            // 'email' => 'required|email',
        ]);

        $data = $request->all();

        $voitureEvaluation=DB::table('evaluations')
                           ->where('marque','like','%'.$data['marque'].'%')
                           ->Where('modele','like','%'.$data['model'].'%')
                           ->Where('annee','=',$data['annee'])
                           ->first();
                //  dd($voitureEvaluation);
            if ($voitureEvaluation==null) {
                return back()->with( 'error', 'Cette Voiture n\'existe pas dans notre base de donnée' );

            }
            if ($voitureEvaluation->estimationCarburant==null && $voitureEvaluation->type_carburant !=$request->carburant) {
                return back()->with( 'error', 'Cette Voiture n\'existe pas dans notre base de donnée' );

            }
            if ($voitureEvaluation->estimationTransmission==null && $voitureEvaluation->boite !=$request->boite) {
                return back()->with( 'error', 'Cette Voiture n\'existe pas dans notre base de donnée' );

            }
            //  dd($voitureEvaluation);
        $voiturerecup=new Evaluation();
        // foreach($voitureEvaluation as $voiture){
            $voiturerecup->marque=$voitureEvaluation->marque;
            $voiturerecup->modele=$voitureEvaluation->modele;
            $voiturerecup->annee=$voitureEvaluation->annee;
            $voiturerecup->kilometrage=$voitureEvaluation->kilometrage;
            $voiturerecup->type_carburant=$voitureEvaluation->type_carburant;
            $voiturerecup->boite=$voitureEvaluation->boite;
            $voiturerecup->prix=$voitureEvaluation->prix;
            $voiturerecup->estimationCarburant=$voitureEvaluation->estimationCarburant;
            $voiturerecup->estimationKm=$voitureEvaluation->estimationKm;
            $voiturerecup->estimationTransmission=$voitureEvaluation->estimationTransmission;
            $voiturerecup->prix_conteur_0km=$voitureEvaluation->prix_conteur_0km;
            $voiturerecup->image=$voitureEvaluation->image;
        // }
        //   dd($voiturerecup);

        $prixestimatif=(new VoitureEvaluationService)->VoitureEvaluation($voiturerecup,$data['kilometre'],$data['boite'],$data['carburant']);


        $mail_data=[
            'prix'=>$prixestimatif,
            // 'email' => $data['email'],
            'marque'=>$data['marque'],
            'modele'=>$data['model'],
            'kilometrage'=>$data['kilometre'],
            'annee'=>$data['annee'],
            'carburant'=>$data['carburant'],
            'boite'=>$data['boite'],
            'subject'=>'Evaluation prix voiture',
            'image'=>$voiturerecup->image
        ];
        //  dd($mail_data);


        // Mail::send('mail.evaluation',$mail_data,function($message)use($mail_data){
        //     $message->to($mail_data['email'])
        //             ->from($mail_data['recipient'])
        //             ->subject($mail_data['subject']);
        // });
    //   return view('evaluation.evaluation',$mail_data)->with('success','Evaluation enregistrée avec succès un email vous sera envoyer');
        //     $data=[
        //         'data'=>$mail_data
        //     ];
        //   return response()->json([
        //       'success' => true,
        //       'data'=>$mail_data

        //   ]);
        // return response()->json($mail_data);
        // dd($mail_data);
        return view('evaluation.evaluation',$mail_data);

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
            'prix_conteur_0km'=>'required',
        ]);
        $voitureEvaluation=new Evaluation();
        $voitureEvaluation->marque=$request->marque;
        $voitureEvaluation->modele=$request->modele;
        $voitureEvaluation->annee=$request->annee;
        $voitureEvaluation->kilometrage=$request->kilometrage;
        $voitureEvaluation->type_carburant=$request->type_carburant;
        $voitureEvaluation->boite=$request->boite;
        $voitureEvaluation->prix=$request->prix;
        $voitureEvaluation->estimationCarburant=$request->estimationCarburant;
        $voitureEvaluation->estimationKm=$request->estimationKm;
        $voitureEvaluation->estimationTransmission=$request->estimationTransmission;
        $voitureEvaluation->prix_conteur_0km=$request->prix_conteur_0km;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move( public_path( 'evaluation' ), $imageName );
            $voitureEvaluation->image = $imageName;
        }

        // $image = $request->image;

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
        $voiture->estimationCarburant=$request->estimationCarburant;
        $voiture->estimationKm=$request->estimationKm;
        $voiture->estimationTransmission=$request->estimationTransmission;
        $voiture->prix_conteur_0km=$request->prix_conteur_0km;
        if(isset($request->image)){
            $image = $request->image;
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move( public_path( 'evaluation' ), $imageName );
            $voiture->image = $imageName;
        }
        $voiture->save();

        return redirect('/evaluation/liste')->with( 'success', 'voiture Modifier' );
    }

    public function models($marque){
        $models = Evaluation::where('marque','like','%'. $marque.'%')->pluck('modele')->unique();
        return response()->json($models);
    }
    public function annee($model){

        $annee = Evaluation::where('modele',$model)->pluck('annee')->unique();
      
        return response()->json($annee);
    }
}
