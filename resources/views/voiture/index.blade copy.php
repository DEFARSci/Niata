@extends('layout.app')

@section('content')





<div id="default-carousel" class="relative w-full" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div id="carouselExampleSlidesOnly" class="carousel slide h-5  mt-5 pt-4 mb-6 rounded-5 w-75 mx-auto" data-bs-ride="carousel">
    <div class="carousel-inner rounded-5 mt-5" style="height: 20rem ">
      <div class="carousel-item active " style="height: 50px ">
        <img src="{{ asset('defaultimg/blog.jpeg') }}" class="d-block w-100 h-1 rounded-9" alt="..." style="height: 20rem ">
      </div>
      <div class="carousel-item h-1">
        <img src="{{asset('defaultimg/blog1.png')}}" class="d-block w-100 h-1 rounded-9" alt="..."style="height: 20rem">
      </div>
      <div class="carousel-item h-1">
        <img src="{{asset('defaultimg/blog3.jpeg')}}" class="d-block w-100 h-1 rounded-9" alt="..."style="height: 20rem">
      </div>

    </div>
  </div>

</div>
<div class="container-fluid ">

<div class="row">
<div class="col-md-2 mt-5 d-none d-md-block fixed-md" style="top: 10; position: fixed;">
  <div class="  bg-black rounded-5 border shadow-lg p-3">


  <h1 class="p-2 display-6 font-bold text-white">Recherche</h1>
  <div>
    <form class=" " action="{{route('voiture.search')}}" method="get">
      <div class="form-group mt-3 mb-3">
        {{-- recherche          --}}
          <input class="form-control mb-2" placeholder="recherche" type="text"value="{{Request::get('search')}}" name="search">
         {{-- Marque --}}
          <select name="marque" class="form-control mb-2">
            <option value="">Tout les marques</option>
              @foreach ( $rechercher as $voitured)
            <option value="{{ $voitured->marque}}"  {{Request::get('marque')==$voitured->marque ? 'selected' : ''}}>{{$voitured->marque}}</option>
            @endforeach

          </select>
          {{-- Model --}}
        <select name="modele" class="form-control mb-2">
          <option value="">Tout les model</option>
          @foreach ( $rechercher as $voitured)
        <option value="{{ $voitured->modele}}" {{Request::get('modele')==$voitured->modele ? 'selected' : ''}}>{{$voitured->modele}}</option>
        @endforeach
      </select>
        {{-- Moteur --}}
      <select name="moteur" class="form-control mb-2">
        <option value="">Type de moteur</option>
          @foreach ( $rechercher as $voitured)
        <option value="{{ $voitured->moteur}}"  {{Request::get('moteur')==$voitured->moteur ? 'selected' : ''}}>{{$voitured->moteur}}</option>
        @endforeach

      </select>
        {{-- Boite --}}
      <select name="boite" class="form-control mb-2">
        <option value="">Type de boite</option>
          @foreach ( $rechercher as $boi)
        <option value="{{ $boi->boite}}"  {{Request::get('boite')==$boi->boite ? 'selected' : ''}}>{{$boi->boite}}</option>
        @endforeach

      </select>
      {{-- annee --}}
      <input class="form-control" placeholder="année" type="number"value="{{Request::get('annee')}}"name="annee">
      <label for="" class="form-label text-white">prix entre</label>
      <div class="row">

        <div class="col-md-5">
          <input class="form-control" placeholder="prix" type="number"value="{{Request::get('prixinf')}}"name="prixinf">
        </div>
        <div class="col-md-1 text-white">et</div>
        <div class="col-md-5">
          <input class="form-control" placeholder="prix" type="number"value="{{Request::get('prixmax')}}"name="prixmax">
        </div>
      </div>
      </div>

      <button type="submit" class="btn border rounded-5 text-white"
      > <i class="fas fa-search">recherche</i></button>
      </form>
  </div>
</div>
</div>
<div class=" col-md-9 mt-5 mr-1 border w-75 mx-auto  col-md-12 rounded-5 d-flex justify-content-center">

    <div class="row col-md-12 col-sm-12 d-flex justify-content-center pb-3">
      @if (count($voiture) == 0)
      <div class="flex display-flex justify-center p-4">
        <h1 class="p-2 display-6 font-bold">Malheureusement, nous n'avons pas trouvé de véhicules correspondant à vos critères de recherche.</h1>
     </div>

      @else


      @foreach ($voiture as $v)
      <div class="col-md-3 col-sm-12 col-lg-3 mt-5  m-2  rounded-5 border" style="background-color: rgb(255, 255, 255)">
        <!-- Image -->
        <div class=" col-sm-12 p-3 border-none " >
        <img   src="{{ asset('voiture/'.$v->image) }}" alt=""  class="img-fluid col-sm-12 rounded-5 " style="height: 20rem;background-color: rgb(231, 217, 217);">
        </div>
        <div class="border rounded-5 p-2 mb-2">
           <div class="row ">
            <div class="col-md-8 mt-2 ">
                 <!-- Heading -->
                 <span class=" text-sm rounded-5 p-1 bg-black text-white ">Marque </span>
            <h6 class=" text-black mb-4">{{ $v->marque }}</h6>
            <span class=" text-sm rounded-5 p-1 bg-black text-white ">Model </span>
            <h6 class=" text-black mb-4">{{ $v->modele }}</h6>
            <!-- Description -->
            </div>
            <div class="col-md-4  mt-2 ">
                <!-- Heading -->
           <span class=" text-sm rounded-5 p-1 bg-black text-white ">Moteur </span>
           <h6 class="  text-black mb-4">{{ $v->moteur }}</h6>
           <span class=" text-sm rounded-5 p-1 bg-black text-white ">Boite </span>
           <h6 class="  text-black mb-4">{{ $v->boite }}</h6>
           <!-- Description -->
           </div>
           </div>
           <div class="d-flex justify-content-between p-3">
            <div>
                <a role="button" href="{{route('voiture.show', $v->id)}}" class="text-sm p-1 rounded-5 bg-black  text-decoration-none text-white">Detail</a>
            </div>
            <div>
                <span class=" text-sm p-1 rounded-5 bg-black text-white ">{{ $v->prix }} FCFA</span>
            </div>


        </div>

        </div>
        <!-- CTA -->

    </div>




          @endforeach
          @endif
</div>
    </div>


</div>

</div>


<style>
  .carousel-image {
    max-height: 500px;
  }
</style>
@endsection
