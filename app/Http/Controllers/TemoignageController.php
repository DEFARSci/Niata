<?php

namespace App\Http\Controllers;

use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use GrahamCampbell\ResultType\Success;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temoignages = Temoignage::all();

        $nbr=count($temoignages);
        return view('temoignages.index', compact('temoignages','nbr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temoignages.create');
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
            'prenom' => 'required',
            'nom' => 'required',
            'domaine' => 'required',
            'message' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $temoignage = new Temoignage();
        $temoignage->prenom = $request->prenom;
        $temoignage->nom = $request->nom;
        $temoignage->domaine = $request->domaine;
        $temoignage->message = $request->message;
        $temoignage->ispublished = 0 ;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('temoignage'), $imageName);
            $temoignage->image = $imageName;
        }

        $temoignage->save();

        return back()->with('success', 'Témoignage ajouté avec succès.');

        // return redirect()->route('temoignages.index')->with('success', 'Témoignage ajouté avec succès.');
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $temoignage = Temoignage::findOrFail($id);
        return view('temoignages.edit', compact('temoignage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $temoignage = Temoignage::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('temoignage'), $imageName);
            $temoignage->image = $imageName;
        }
        $temoignage->prenom = $request->prenom;
        $temoignage->nom = $request->nom;
        $temoignage->domaine = $request->domaine;
        $temoignage->message = $request->message;

        $temoignage->save();

        return redirect()->route('temoignage.index')->with('success', 'Témoignage mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Temoignage::destroy($id);
        return redirect()->route('temoignage.index')->with('success', 'Témoignage supprimé avec succès.');
    }

    public function avis(){
        // $avis = Temoignage::take(15)->get();
       $avis= Temoignage::where('ispublished',"=", '1')->take(10)->get();
        return view('carrousel.caroussel-avis', compact('avis'));

    }

    public function etat($id){
        try {
            DB::beginTransaction();

            $temoignage = Temoignage::find($id);
            // dd($temoignage);

            if ($temoignage->ispublished == true) {
                Temoignage::where('id', $id)->update(['ispublished' => false]);
                $message = "Témoignage désactivé";
            } else {
                Temoignage::where('id', $id)->update(['ispublished' => true]);
                $message = "Témoignage activé";
            }

            DB::commit();

            return back()->with("success", $message);
        } catch (\Exception $e) {
            DB::rollback();

            return back()->with("error", "Une erreur s'est produite lors de la mise à jour du témoignage.");
        }

    }
      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $temoignage = Temoignage::findOrFail($id);
        return view('temoignages.show', compact('temoignage'));
    }
}
