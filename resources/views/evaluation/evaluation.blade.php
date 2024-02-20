@extends('layout.app')

@section('content')

<div class="container mt-5 pt-2">
    <div class="row">
        <div class=" col-lg-3 col-12 pt-3 ">
        </div>
        {{-- <div class="col-md-9 col-lg-9 col-12 mt-5 pt-2  ">
            <span class=" col-md-12 col-lg-12 col-12 d-inline-block p-3 text-white mx-auto h1 rounded-3">{{ $marque }} {{ $modele }} {{ $annee }} </span>
        </div> --}}
        <div class="col-md-12 col-lg-7 col-12 text-center mt-3 pt-3 ">
            <span class="d-inline-block  text-black bg-white mx-auto h3  rounded-5  p-3"><strong>Prix estimatif de votre véhicule:</strong>  {{number_format( $prix, 0, ',', '.')  }} FCFA</span>
        </div>

    </div>
</div>
<div class="container  ">
    <div class="row ">
        <div class=" col-lg-2 col-12 pt-3">

        </div>
        <div class="col-md-12 col-lg-9 col-12  rounded-5 ">
            <img class="imgevaluation rounded-5"  src="{{ asset('evaluation/'.$image) }}" alt="" style="width: 100%; height: 30rem; object-fit: cover;">
        </div>

    <div class="col-md-1 col-lg-1 col-12 pt-3">

    </div>
</div>
<div class="container">
    <div class="row rounded-5 pt-3">
        <div class=" col-lg-2 col-12 pt-3">
        </div>
<div class="col-md-12 col-lg-9 col-12 pt-3 bg-white rounded-5 ">

    <div class="col-md-9 col-lg-9 col-12   ">
        <span class=" col-md-12 col-lg-12 col-12 d-inline-block p-3  mx-auto h3 rounded-3">{{ $marque }} {{ $modele }} {{ $annee }} </span>
    </div>
    <div class="row">

        <div class="col-lg-3 col-md-6 col-6 border text-center pt-3 ">
            <div class="col-12 ">

                <img src="{{asset('icone/engine.png')}}" class="img-responsive" alt="" style="width: 30%; height: 30%; object-fit: cover;">
            </div>
            <span>
                <strong>Boîte:</strong>
                <h3>
                    {{ $boite }}

                </h3>


            </span>
        </div>
        <div class="col-lg-3 col-md-6 col-6 border text-center pt-3">
            <div class="col-12 ">
                <img src="{{asset('icone/fuel.png')}}" class="img-responsive" alt="" style="width: 30%; height: 30%; object-fit: cover;">
            </div>
            <span>
                <strong>Carburant:</strong><h3> {{ $carburant }} </h3>


            </span>
        </div>
        <div class="col-lg-3 col-md-6 col-6 border  text-center pt-3">
            <div class="col-12">
                <img src="{{asset('icone/year.png')}}" class="img-responsive" alt="" style="width: 30%; height:30%; object-fit: cover;">
            </div>
            <span>

                <strong>Annee:</strong> <h3>
                    {{ $annee }}

                </h3>
            </span>
        </div>
        <div class="col-lg-3 col-md-6 col-6 border text-center pt-3">
            <div class="col-12">
                <img src="{{asset('icone/km.png')}}" class="img-responsive" alt="" style="width: 30%; height: 30%; object-fit: cover;">

            </div>
            <span>
                <strong>Kilometrage:</strong> <h3>{{ $kilometrage }} km</h3>

            </span>
        </div>
        <div class="col-md-12 col-lg-12 col-12 pt-3 d-flex justify-content-center ">
            <span class="d-inline-block  text-white bg-black mx-auto h3  rounded-5  p-3 text-center">
                <a type="button" class=" text-white p-3 rounded-3xl text-decoration-none" href="{{route('accueil')}}">Faire une autre evaluation</a>

            </span>

        </div>
    </div>

    </div>
    <div class="col-md-1 col-lg-1 col-12 mt-5 pt-2  ">
    </div>
</div>
</div>






@endsection
