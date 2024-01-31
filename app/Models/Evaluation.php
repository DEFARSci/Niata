<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable=[
        'marque',
        'modele',
        'annee',
        'kilometrage',
        'type_carburant',
        'boite',
        'prix',
        'estimationKm',
        'estimationTransmission',
        'estimationCarburant',
        'prix_conteur_0km',
        'image',
    ];
}
