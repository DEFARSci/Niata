<?php
namespace App\Repositories\Interfaces;

interface DemandeClientRepositoryInterface{
    
    public function allDemandeClient();
    public function storeDemandeClient($data);
    public function findDemandeClient($id);
    public function updateDemandeClient($data, $id); 
    public function destroyDemandeClient($id);
    public function telechargeAllDemandeClient();
}