@extends('layout.app')

@section('content')

<div class="row mt-5">
    {{-- <h1>{{$voiture->marque}}</h1> --}}
    <div class="col-md-2"></div>
<div class="col-md-8 mt-5">
    <div class="row">
        <div class="col-md-9 bg-black">
            <img class=" w-full  "  src="{{ asset('voiture/'.$voiture->image) }}" alt="">
        </div>
        <div class="col-md-3">

            <div class=" flex bg-red border border-solid">
                <h2 class="p-2 text-white font-bold">{{ $voiture->prix }} </h2> <span class="pt-2 text-white">FCFA</span>
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
                <h2 class="p-2 font-bold mr-5 text-white">Marque</h2>
                <h2 class="p-2 ml-5 text-white">{{ $voiture->marque }}</h2>
            </div>
            <div class="d-flex bg-red border border-solid">
                <h2 class="p-2 font-bold mr-5 text-white">Modèle</h2>
                <h2 class="p-2 ml-5 text-white">{{ $voiture->modele }}</h2>
            </div>
            <div class="d-flex bg-red border border-solid">
                <h2 class="p-2 font-bold mr-5 text-white">Transmission</h2>
                <h2 class="p-2 ml-5 text-white">{{ $voiture->boite }}</h2>
            </div>
            <div class="d-flex bg-red border border-solid">
                <h2 class="p-2 font-bold mr-5 text-white">Carburant</h2>
                <h2 class="p-2 ml-5 text-white">{{ $voiture->moteur }}</h2>
            </div>
            <div class="d-flex bg-red border border-solid">
                <h2 class="p-2 font-bold mr-5 text-white">Année</h2>
                <h2 class="p-2 ml-5 text-white">{{ $voiture->annee }}</h2>
            </div>
            <div class="d-flex bg-red border border-solid">
                <h2 class="p-2 font-bold mr-5 text-white">Kilométrage</h2>
                <h2 class="p-2 ml-5 text-white">{{ $voiture->kilometrage }}</h2>
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

            <h2 class="p-2 font-bold mr-5 text-white">Description</h2>

            <p class="p-2 ml-5 text-white">{{ $voiture->caracteristique }}</p>

        </div>
        <div class="col-md-3">


        </div>
        </div>
</div>
<div class="col-md-2"></div>
</div>
@endsection
