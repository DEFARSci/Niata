<?php
namespace App\Services;

use App\Models\Evaluation;

class VoitureEvaluationService{

    public function VoitureEvaluation(Evaluation $evaluation , $distanceParcourue, $age, $transmission, $carburant){

            // Ajustement en fonction de la distance parcourue
            $prixInitialrecup=$evaluation->prix;
            $carburantrecup = $evaluation->type_carburant;
            $boiterecup = $evaluation->boite;
            $kilometrerecup = $evaluation->kilometrage;
            $anneerecup=$evaluation->annee;
            
            $ajustementDistance = 0;
            $differenceKilometrage = $kilometrerecup - $distanceParcourue;

if ($differenceKilometrage == 0) {
    // Si la différence est comprise entre -1000 et 1000, aucune modification
    $ajustementDistance = 0;

} elseif ($differenceKilometrage >= 1000) {

    $ajustementDistance = intval($differenceKilometrage/1000) * 50000;

} elseif($differenceKilometrage <= -1000 ) {

    $ajustementDistance = intval($differenceKilometrage/1000) * 50000;
}
        // dd($ajustementDistance);
            // Ajustement en fonction de l'âge
            $ajustementAge = 0;
            if ($anneerecup-$age>0 ) {
                $ajustementAge =($anneerecup-$age)* -75000;

            } elseif ($anneerecup-$age <0) {
                $ajustementAge = ($anneerecup-$age)* -75000;
            }elseif ($anneerecup == $age) {
                $ajustementAge = 0;
            }
        
            // Ajustement en fonction du type de carburant
            $ajustementCarburant = 0;
            if (strtolower($carburant) == strtolower($carburantrecup)) {
                $ajustementCarburant = 0;
            } elseif (strtolower($carburant) == "diesel" && strtolower($carburantrecup) == "essence"){ 
                $ajustementCarburant = 50000;
            } elseif (strtolower($carburant) == "essence" && strtolower($carburantrecup) == "diesel"){
                $ajustementCarburant = -50000;
            }
        
            // Ajustement en fonction du type de transmission
            $ajustementTransmission = 0;
            if (strtolower($transmission) == strtolower($boiterecup)) {
                $ajustementTransmission = 0;
            } elseif (strtolower($transmission) == "manuelle" && strtolower($boiterecup) == "automatique") {
                $ajustementTransmission = -100000;
            }elseif(strtolower($transmission) == "automatique" && strtolower($boiterecup) == "manuelle"){
                $ajustementTransmission = 100000;
            }
        
            // Calcul du prix final après ajustements
            $prixFinal = $prixInitialrecup + $ajustementDistance + $ajustementAge + $ajustementCarburant + $ajustementTransmission;
        return $prixFinal;
            // return  ['prix'=> $prixFinal, 
            //          'distance'=> $distanceParcourue,
            //          'age'=> $age,
            //          'transmission'=> $transmission,
            //          'carburant'=> $carburant,
            //          'boite'=> $boiterecup,
            //          'kilometrage'=> $kilometrerecup, 
            //          'annee'=> $anneerecup,
            //          'ajustementDistance'=> $ajustementDistance,
            //          'ajustementAge'=> $ajustementAge,
            //          'ajustementCarburant'=> $ajustementCarburant,
            //          'ajustementTransmission'=> $ajustementTransmission

            //         ];
        }
        

        
       
  



}