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
<div class=" container  mt-3">
    <div class="row">
        <div class="col-md-3 mt-3 ">
            <div class="">


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
        <div class="col-md-8 mt-4 pt-4">
            @foreach ($voiture as $v)


            User
            positionner le button en bas a droite
            <div class="card mb-3 rounded-5 border bg-black text-white">
                            <div class="row">
                              <div class="col-md-5 rounded-5  justify-content-center">
                                <img src="{{ asset('voiture/'.$v->image) }}" class="img-fluid rounded-5" style="width: 20rem;background-color: rgb(63, 61, 61);">
                              </div>
                              <div class="col-md-7">
                                <div class="card-body">
                                  <span class="card-title text-black bg-white p-2 mb-3 rounded-5">{{$v->marque}} {{$v->modele}}</span>
                                  <p class="card-text mt-3">
                                   {{ $v->annee }}  |  {{ $v->kilometrage }} km  |  {{ $v->boite }}  |  {{ $v->moteur }}
                                  </p>
                                  <p class="card-text">
                                    <small class="text-muted">{{ $v->caracteristique }}</small>
                                  </p>
                                </div>
                                <span>{{ $v->prix }} FCFA</span>
                              </div>
                            </div>

                          </div>

              @endforeach
    </div>
</div>
</div>

<style>
  .carousel-image {
    max-height: 500px;
  }
</style>
@endsection
