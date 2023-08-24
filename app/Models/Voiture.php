<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable=[
        'marque',
        'modele',
        'annee',
        'kilometrage',
        'etat',
        'moteur',
        'boite',
        'caracteristique',
        'prix',
        'image'
    ];

    protected $casts=[
        'created_at'=>'datetime',
    ];

}
