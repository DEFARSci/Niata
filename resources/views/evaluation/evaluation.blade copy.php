@extends('layout.app')
@section('content')

<div class="text-lg font-semibold text-center whitespace-nowrap dark:text-white m-8">
  @if (session('success'))
            <div class="alert alert-success alert-dismissable m-3">
                {{session('success')}}
            </div>
    @elseif (session('error'))
            <div class="alert alert-danger alert-dismissable m-3">
                {{session('error')}}
            </div>
    @endif
    Evaluation
</div>
<div class="flex justify-center items-center p-4 " style="background-color: rgba(47, 48, 47, 0.082) ">
    <div class="d-flex bg-red border border-solid">
        <h2 class="p-2  display-6">Prix estimatif de votre vehicule est:</h2>
        <h1 class="p-2 display-6 font-bold">{{ $prix}} Fr </h1>
    </div>
</div>
<div class=" flex justify-center items-center p-4 " style="background-color: rgba(47, 48, 47, 0.082)">

      <div class=" w-1/2 ">
                <div class="d-flex bg-red border border-solid">
                    <h2 class="p-2 font-bold mr-5">Marque</h2>
                    <h2 class="p-2 ml-5">{{ $marque}}</h2>
                </div>
                <div class="d-flex bg-red border border-solid">
                    <h2 class="p-2 font-bold mr-5">Modèle</h2>
                    <h2 class="p-2 ml-5">{{ $modele }}</h2>
                </div>
                <div class="d-flex bg-red border border-solid">
                    <h2 class="p-2 font-bold mr-5">Transmission</h2>
                    <h2 class="p-2 ml-5">{{ $boite }}</h2>
                </div>
                <div class="d-flex bg-red border border-solid">
                    <h2 class="p-2 font-bold mr-5">Carburant</h2>
                    <h2 class="p-2 ml-5">{{ $carburant }}</h2>
                </div>
                <div class="d-flex bg-red border border-solid">
                    <h2 class="p-2 font-bold mr-5">Année</h2>
                    <h2 class="p-2 ml-5">{{ $annee }}</h2>
                </div>
                <div class="d-flex bg-red border border-solid">
                    <h2 class="p-2 font-bold mr-5">Kilométrage</h2>
                    <h2 class="p-2 ml-5">{{ $kilometrage}}</h2>
                </div>

             </div>
</div>
<div class="text-lg font-semibold text-center whitespace-nowrap dark:text-white m-8">
    <h2>Vous allez recevoire une description plus detailler de votre evaluation par e-mail</h2>
</div>

<div class="flex justify-center items-center  ">
    <span class="text-lg font-semibold text-center whitespace-nowrap dark:text-white m-8">

       <a type="button" class="bg-primary text-white p-3 rounded-3xl hover:bg-black" href="{{route('evaluation.index')}}">Faire une autre evaluation</a>
    </span>
</div>


@endsection
