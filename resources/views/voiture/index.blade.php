@extends('layout.app')

@section('content')





<div id="default-carousel" class="catalogue" data-carousel="slide">
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
<section class="section-3 py-5 bg-2 ">
    <div class="container">
        <div class="row  ">
            <div class="col-lg-4 col-md-12 col-12  ">

            </div>
            <div class=" catalogueMessage col-lg-4 col-md-12 col-12 rounded-4 p-2 text-white ">
                <h2 class="text-white text-center">Trouvez votre vehicule</h2>
            </div>
            <div class="col-lg-4 col-md-12 col-12 ">

            </div>
        </div>

        <div class="row pt-5">
            <div class="col-md-4 col-lg-3 col-sm-12 sidebar mb-4">
                <div class="card border-0 shadow p-4 rounded-5">

                    <h1 class="p-2 display-6 font-bold" style="text-decoration: underline;">Recherche</h1>

                 <form class=" " action="{{route('voiture.search')}}" method="get">
                   {{-- !!recherche--}}
                    <div class="mb-4">

                    <input class="form-control mb-2 rounded-5" placeholder="recherche" type="text"value="{{Request::get('search')}}" name="search">
                    </div>
                    {{--!! Marque --}}
                    <div class="mb-4">
                        <select name="marque" class="form-control mb-2 rounded-5">
                            <option value="" class="rounded-5">Toutes les marques</option>
                              @foreach ( $rechercher as $voitured)
                            <option class="rounded-5" value="{{ $voitured->marque}}"  {{Request::get('marque')==$voitured->marque ? 'selected' : ''}}>{{$voitured->marque}}</option>
                            @endforeach

                          </select>
                    </div>
                    {{-- !! Model --}}
                    <div class="mb-4">
                        <select name="modele" class="form-control mb-2 rounded-5">
                            <option value="" class="rounded-5">Tout les modeles</option>
                            @foreach ( $rechercher as $voitured)
                          <option class="rounded-5" value="{{ $voitured->modele}}" {{Request::get('modele')==$voitured->modele ? 'selected' : ''}}>{{$voitured->modele}}</option>
                          @endforeach
                        </select>
                    </div>
                   {{--!! Moteur --}}
                    <div class="mb-4">

                    <select name="moteur" class="form-control mb-2 rounded-5">
                        <option class="rounded-5" value="">Type de moteur</option>
                        <option class="rounded-5" value="essence">Essence</option>
                        <option class="rounded-5" value="diesel">Diesel</option>
                        <option class="rounded-5" value="hybride">Hybride</option>
                        {{-- @foreach ( $rechercher as $voitured)
                        <option class="rounded-5" value="{{ $voitured->moteur}}"  {{Request::get('moteur')==$voitured->moteur ? 'selected' : ''}}>{{$voitured->moteur}}</option>
                        @endforeach --}}

                    </select>
                    </div>
                    {{-- !!Boite --}}

                    <div class="mb-4">
                    <select name="boite" class="form-control mb-2 rounded-5">
                        <option class="rounded-5" value="">Type de boite</option>
                        <option class="rounded-5" value="manuelle">Manuelle</option>
                        <option class="rounded-5" value="automatique">Automatique</option>
                        {{-- @foreach ( $rechercher as $boi)
                        <option class="rounded-5" value="{{ $boi->boite}}"  {{Request::get('boite')==$boi->boite ? 'selected' : ''}}>{{$boi->boite}}</option>
                        @endforeach --}}

                    </select>
                    </div>
                    {{-- !!annee --}}
                    <div class="mb-4">

                     <input class="form-control rounded-5" placeholder="année" type="number"value="{{Request::get('annee')}}"name="annee">
                    </div>
                    {{-- !! prix --}}
                    <div class="mb-2">
                        <div class="row">
                          <label >Prix conpris entre</label>
                            <div class="col-md-12 col-lg-6 col-6 mb-2">
                              <input class="form-control rounded-5 " placeholder="prix" type="number"value="{{Request::get('prixinf')}}"name="prixinf">
                            </div>
                            <div class="col-md-12 col-lg-6 col-6 mb-2">
                              <input class="form-control rounded-5 " placeholder="prix" type="number"value="{{Request::get('prixmax')}}"name="prixmax">
                            </div>
                          </div>
                    </div>
                    <div class="mb-4">
                    <button type="submit" class="form-control btn border rounded-5 text-white bg-black"> <i class="fas fa-search"></i> Recherche</button>
                    </div>
                </form>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 ">
                <div class="job_listing_area">
                    <div class="job_lists">
                    <div class="row">
                        @foreach ($voiture as $v)
                        <div class="col-md-6 col-lg-6 ">
                            <div class="card border-0 p-3 shadow mb-4 rounded-5">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0 "><strong>{{$v->marque}} {{$v->modele}}</strong> </h3>
                                  {{-- <span class="card-title text-black bg-white p-2 mb-3 rounded-5">{{$v->marque}} {{$v->modele}}</span> --}}

                                    <h6 class="">
                                   {{ $v->annee }}  |  {{ $v->kilometrage }} km  |  {{ $v->boite }}  |  {{ $v->moteur }}

                                    </h6>
                                    <div class="bg-light border rounded-5 mt-3">
                                        <img src="{{ asset('voiture/'.$v->image) }}" alt="" class="img-fluid col-sm-12 rounded-5" style="width: 100%; height: 10rem; object-fit: cover;">
                                    </div>


                                    <div class="d-grid mt-3">
                                        <a href="{{route('voiture.show', $v->id)}}"  class="btn bg-black text-white btn-lg rounded-5">Details</a>
                                          {{-- <a role="button" href="{{route('voiture.show', $v->id)}}" class="text-sm p-1 rounded-5 bg-black  text-decoration-none text-white">Details</a> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
@endforeach




                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
  .carousel-image {
    max-height: 500px;
  }
</style>
@endsection
