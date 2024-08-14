<?php

namespace App\Repositories;

use App\Models\DemandeClient;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\QueryException;

class DemandeClientRepository {

    public function allDemandeClient(): Collection
{
    try {
        return DB::table('demande_clients')->get();
    } catch (QueryException $e) {
        return collect(); 
    }
}

    public function storeDemandeClient($data){

        try {
            Mail::send('mail.demande',$data,function($message)use($data){
                $message->to('ndoyemamemoussa@gmail.com')
                        ->from($data['email'])
                        ->subject('Demande d\' estimation de vehicule personnalisee');
            });
            return DemandeClient::create($data);

        } catch (QueryException $e) {
            //  Handle the exception as needed, e.g., log the error or rethrow it
             Log::error($e->getMessage());
            return false;
        }        
    }

    public function findDemandeClient($id){
        return DB::table('demande_clients')->find($id);
    }
    public function updateDemandeClient($data, $id){
        $demande=DemandeClient::findOrFail($id);
        
        return $demande->update($data);
    }
    public function destroyDemandeClient($id){
        return DB::table('demande_clients')->where('id', $id)->delete();
    }
    public function telechargeAllDemandeClient(){
        return DB::table('demande_clients')->get();
    }

}