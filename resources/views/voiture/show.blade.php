@extends('layout.app')

@section('content')

<div class="container mt-5 pt-2">
    <div class="row">
        <div class=" col-lg-2 col-12 pt-3">

        </div>
        <div class="col-md-9 col-lg-9 col-12 mt-5 pt-2  ">
            <span class=" col-md-12 col-lg-12 col-12 d-inline-block p-3 text-white mx-auto h1 rounded-3">{{ $voiture->marque }} {{ $voiture->modele }} {{ $voiture->annee }} </span>
        </div>

    </div>
</div>
<div class="container  ">
    <div class="row ">
        <div class=" col-lg-2 col-12 pt-3">

        </div>
        <div class="col-md-12 col-lg-9 col-12  rounded-5 ">
            <img class="rounded-5"  src="{{ asset('voiture/'.$voiture->image) }}" alt="" style="width: 100%; height: 30rem; object-fit: cover;">
        </div>

    <div class="col-md-1 col-lg-1 col-12 pt-3">

    </div>
</div>
<div class="container">
    <div class="row rounded-5 pt-3">
        <div class=" col-lg-2 col-12 pt-3">
        </div>
<div class="col-md-12 col-lg-9 col-12 pt-3 bg-white rounded-5 ">
    <div class="col-md-12 col-lg-12 col-12  d-flex justify-content-center ">
        {{-- <span class="d-inline-block p-3 text-black bg-white mx-auto h3 rounded-3">Details</span> --}}
        <span class="d-inline-block  text-white bg-black mx-auto h3  rounded-5  p-3"><strong>Prix:</strong>  {{number_format($voiture->prix, 0, ',', '.')  }} fr</span>
    </div>
    <div class="row">

        <div class="col-lg-3 col-md-6 col-6 border-top text-center pt-3 ">
            <div class="col-12 ">

                <img src="{{asset('icone/engine.png')}}" class="img-responsive" alt="" style="width: 30%; height: 30%; object-fit: cover;">
            </div>
            <span>
                <strong>Boîte:</strong>
                <h3>
                    {{ $voiture->boite }}

                </h3>


            </span>
        </div>
        <div class="col-lg-3 col-md-6 col-6 border text-center pt-3">
            <div class="col-12 ">
                <img src="{{asset('icone/fuel.png')}}" class="img-responsive" alt="" style="width: 30%; height: 30%; object-fit: cover;">
            </div>
            <span>
                <strong>Carburant:</strong><h3> {{ $voiture->moteur }} </h3>


            </span>
        </div>
        <div class="col-lg-3 col-md-6 col-6 border  text-center pt-3">
            <div class="col-12">
                <img src="{{asset('icone/year.png')}}" class="img-responsive" alt="" style="width: 30%; height:30%; object-fit: cover;">
            </div>
            <span>

                <strong>Annee:</strong> <h3>
                    {{ $voiture->annee }}

                </h3>
            </span>
        </div>
        <div class="col-lg-3 col-md-6 col-6 border-top text-center pt-3">
            <div class="col-12">
                <img src="{{asset('icone/km.png')}}" class="img-responsive" alt="" style="width: 30%; height: 30%; object-fit: cover;">

            </div>
            <span>
                <strong>Kilometrage:</strong> <h3>{{ $voiture->kilometrage }} km</h3>

            </span>
        </div>
    </div>
    {{-- <div class="col-md-12 col-lg-12 col-12  text-center">
        <span class="d-inline-block p-3 text-black bg-white mx-auto h3 rounded-3">Caractéritiques</span>
        <span class=" text-black p-3 bg-white font-bold flex rounded-3 h2"><strong>Prix:</strong> {{ $voiture->prix }} fr </span>

    </div> --}}
{{--
    <div class="d-flex ">
        <span class="p-3 text-black bg-white font-bold flex rounded-3 h2 col-12"><strong>Transmission:</strong> {{ $voiture->boite }} </span>
    </div>
    <div class="d-flex  ">
        <span class="p-3 text-black bg-white font-bold flex rounded-3 h2 col-12"><strong>Carburant:</strong> {{ $voiture->moteur }} </span>
    </div>
    <div class="d-flex  ">
        <span class="p-3 text-black bg-white font-bold flex rounded-3 h2 col-12"><strong>Année:</strong> {{ $voiture->annee }} </span>
    </div>
    <div class="d-flex  ">
        <span class="p-3 text-black bg-white font-bold flex rounded-3 h2 col-12"><strong>Kilométrage:</strong> {{ $voiture->kilometrage }} km </span>
    </div>
    <div class="d-flex  ">
        <span class=" text-black p-3 bg-white font-bold flex rounded-3 h2 col-12"><strong>Prix:</strong> {{ $voiture->prix }} fr </span>
    </div> --}}

    </div>
    <div class="col-md-1 col-lg-1 col-12 mt-5 pt-2  ">
    </div>
</div>
</div>
@endsection
