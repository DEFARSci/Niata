@extends('layout.app')

@section('content')
<h1>{{$voiture->marque}}</h1>
<div class="row">
    <div class="col-md-2"></div>
<div class="col-md-8">
    <div class="row">
        <div class="col-md-9 bg-black">
            <img class=" w-full  "  src="{{ asset('voiture/'.$voiture->image) }}" alt="">
        </div>
        <div class="col-md-3">

            <div class=" flex bg-red border border-solid">
                <h2 class="p-2 display-6 font-bold">{{ $voiture->prix }} </h2> <span class="pt-2">FCFA</span>
            </div>
        </div>
        </div>
</div>
<div class="col-md-2"></div>
</div>
<div class="row mt-2">
    <div class="col-md-2"></div>
<div class="col-md-8">
    <div class="row">
        <div class="col-md-9">
            <div class="d-flex bg-red border border-solid">
                <h2 class="p-2 font-bold mr-5">Marque</h2>
                <h2 class="p-2 ml-5">{{ $voiture->marque }}</h2>
            </div>
            <div class="d-flex bg-red border border-solid">
                <h2 class="p-2 font-bold mr-5">Modèle</h2>
                <h2 class="p-2 ml-5">{{ $voiture->modele }}</h2>
            </div>
            <div class="d-flex bg-red border border-solid">
                <h2 class="p-2 font-bold mr-5">Transmission</h2>
                <h2 class="p-2 ml-5">{{ $voiture->boite }}</h2>
            </div>
            <div class="d-flex bg-red border border-solid">
                <h2 class="p-2 font-bold mr-5">Carburant</h2>
                <h2 class="p-2 ml-5">{{ $voiture->moteur }}</h2>
            </div>
            <div class="d-flex bg-red border border-solid">
                <h2 class="p-2 font-bold mr-5">Année</h2>
                <h2 class="p-2 ml-5">{{ $voiture->annee }}</h2>
            </div>
            <div class="d-flex bg-red border border-solid">
                <h2 class="p-2 font-bold mr-5">Kilométrage</h2>
                <h2 class="p-2 ml-5">{{ $voiture->kilometrage }}</h2>
            </div>
            
        </div>
        <div class="col-md-3">

            
        </div>
        </div>
</div>
<div class="col-md-2"></div>
</div>
<div class="row mt-2">
    <div class="col-md-2"></div>
<div class="col-md-8">
    <div class="row">
        <div class="col-md-9">
           
            <h2 class="p-2 font-bold mr-5">Description</h2>

            <p>{{ $voiture->caracteristique }}</p>
            
        </div>
        <div class="col-md-3">

            
        </div>
        </div>
</div>
<div class="col-md-2"></div>
</div>
@endsection