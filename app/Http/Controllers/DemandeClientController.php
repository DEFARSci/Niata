<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemandeClient;
use App\Repositories\DemandeClientRepository;
use App\Repositories\Interfaces\DemandeClientRepositoryInterface;

class DemandeClientController extends Controller
{

    private $demandeClienRepository;

    public function __construct(DemandeClientRepository $demandeClienRepository){
        $this->demandeClienRepository = $demandeClienRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $demandeClients = $this->demandeClienRepository->allDemandeClient();
            $nbr=count($demandeClients);
           
            return view('demandeClients.index', compact('demandeClients', 'nbr'));
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            // Log::error($e->getMessage());
            return redirect()->route('error.page')->with('error', 'Failed to retrieve client requests.');
        }
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demandeClients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->message);
        $data=$request->validate([
            'nom' => 'required',
            'email' => 'required',
            'telephone' => 'nullable',
            'marque' => 'required',
            'modele' => 'required',
            'infoSupp' => 'nullable',
        
        ]);

       $datas= $this->demandeClienRepository->storeDemandeClient($data);
     
        return redirect()->back()->with('demande', 'Votre demande a été prise en compte. Nous vous contacterons avec une estimation personnalisée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DemandeClient  $demandeClient
     * @return \Illuminate\Http\Response
     */
    public function show(DemandeClient $demandeClient)
    {

        $demandeClient=$this->demandeClienRepository->findDemandeClient($demandeClient->id);
     
        return view('demandeClients.show',compact('demandeClient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DemandeClient  $demandeClient
     * @return \Illuminate\Http\Response
     */
    public function edit(DemandeClient $demandeClient)
    {
        
        $demandeClient=$this->demandeClienRepository->findDemandeClient($demandeClient->id);
    //    $nbr=$demandeClient->id; 
        return view('demandeClients.edit',compact('demandeClient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DemandeClient  $demandeClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DemandeClient $demandeClient)
    {
        
      $test=  $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'telephone' => 'nullable',
            'marque' => 'required',
            'modele' => 'required',
            'infoSupp' => 'nullable',
        ]);

        // $this->demandeClienRepository->updateDemandeClient($demandeClient->id,$test);
        $demandeClient->update($test);
        return back()->with('success', 'Demande Client modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DemandeClient  $demandeClient
     * @return \Illuminate\Http\Response
     */
    public function destroy(DemandeClient $demandeClient)
    {
        
        $this->demandeClienRepository->destroyDemandeClient($demandeClient->id);
        return redirect()->route('demandeClient.index')->with('success', 'Demande Client supprimée avec succès');
    }
}
