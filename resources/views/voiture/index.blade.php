@extends('layout.app')

@section('content')





<div id="default-carousel" class="relative w-full" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative h-70 overflow-hidden rounded-lg md:h-96">
       <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{asset('defaultimg/blog.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{asset('defaultimg/blog1.png')}}"class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{asset('defaultimg/blog3.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>


  </div>
  <!-- Slider indicators -->
  <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
       </div>
  <!-- Slider controls -->
  <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
          </svg>
          <span class="sr-only">Previous</span>
      </span>
  </button>
  <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <span class="sr-only">Next</span>
      </span>
  </button>
</div>





<div class="container-fluide">

    <div class="flex display-flex justify-center p-4">
        {{-- <h1 class="p-2 display-6 font-bold">recherche</h1>  --}}
     </div>
     {{-- <div class="d-flex container justify-content-center">
      <div class=" row p-2 ">


        <form class=" " action="{{route('voiture.search')}}" method="get">
          <div class="row">
            <div class="col-md-3"></div>
          <div class="form-group col-md-6 mb-3 flex-1 justify-content-center">

            <input class="form-control" placeholder="recherche" type="text"value="{{Request::get('search')}}" name="search">

          </div>
          <div class="col-md-3"></div>
          </div>
            <div class="row">



                <div class="form-group col-md-2 mb-3">

                    <input class="form-control" placeholder="année" type="number"value="{{Request::get('annee')}}"name="annee">

                  </div>
                  <div class="form-group col-md-2 mb-3">
                    <select name="boite" class="form-control">
                      <option value="">Type de boite</option>
                        @foreach ( $rechercher as $boi)
                      <option value="{{ $boi->boite}}"  {{Request::get('boite')==$boi->boite ? 'selected' : ''}}>{{$boi->boite}}</option>
                      @endforeach

                    </select>

                  </div>
                  <div class="form-group col-md-2 mb-3">
                    <select name="moteur" class="form-control">
                      <option value="">Type de moteur</option>
                        @foreach ( $rechercher as $voitured)
                      <option value="{{ $voitured->moteur}}"  {{Request::get('moteur')==$voitured->moteur ? 'selected' : ''}}>{{$voitured->moteur}}</option>
                      @endforeach

                    </select>

                  </div>
                  <div class="form-group col-md-2 mb-3">
                    <select name="marque" class="form-control">
                      <option value="">Tout les marques</option>
                        @foreach ( $rechercher as $voitured)
                      <option value="{{ $voitured->marque}}"  {{Request::get('marque')==$voitured->marque ? 'selected' : ''}}>{{$voitured->marque}}</option>
                      @endforeach

                    </select>

                  </div>
                  <div class="form-group col-md-2 mb-3">
                    <select name="modele" class="form-control">
                      <option value="">Tout les model</option>
                      @foreach ( $rechercher as $voitured)
                    <option value="{{ $voitured->modele}}" {{Request::get('modele')==$voitured->modele ? 'selected' : ''}}>{{$voitured->modele}}</option>
                    @endforeach
                  </select>

                  </div>
                  <div class="form-group col-md-2 mb-3">
                    <button type="submit" class="btn bg-sky-500"
                    > <i class="fas fa-search">recherche</i></button>

                  </div>

                   <div class="row">
            <div class="col-md-3"></div>
          <div class="form-group col-md-6 mb-3 flex-1 justify-content-center">

            <input class="form-control" placeholder="recherche" type="text"value="{{Request::get('search')}}" name="search">

          </div>
          <div class="col-md-3"></div>
          </div>

            </div>

          </form>
        </div>


     </div> --}}

<div class="row">
<div class="col-md-3 mt-5 ">
  <div class="bg-primary  rounded-lg shadow-lg p-3">


  <h1 class="p-2 display-6 font-bold text-white">recherche</h1>
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

      <button type="submit" class="btn bg-sky-500 text-white"
      > <i class="fas fa-search">recherche</i></button>
      </form>
  </div>
</div>
</div>
<div class="col-md-9 mt-9">

    <div class="row flex display-flex justify-center ">
      @if (count($voiture) == 0)
      <div class="flex display-flex justify-center p-4">
        <h1 class="p-2 display-6 font-bold">Malheureusement, nous n'avons pas trouvé de véhicules correspondant à vos critères de recherche.</h1>
     </div>

      @else


      @foreach ($voiture as $v)
      <div class="mb-3 w-96 m-1  bg-white rounded-3xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
        <!-- Image -->
        <img class="h-72 w-full object-cover rounded-3xl"  src="{{ asset('voiture/'.$v->image) }}" alt="">
        <div class="">
           <div class="row">
            <div class="col-md-6 mt-2">
                 <!-- Heading -->
            <span class=" text-sm rounded-full p-1">Marque </span>
            <h5 class="font-bold mb-4">{{ $v->marque }}</h5>
            <span class=" text-sm  rounded-full p-1">Model </span>
            <h5 class="font-bold mb-4">{{ $v->modele }}</h5>
            <!-- Description -->
            </div>
            <div class="col-md-6  mt-2">
                <!-- Heading -->
           <span class=" text-sm rounded-full p-1">Moteur </span>
           <h5 class="font-bold mb-4">{{ $v->moteur }}</h5>
           <span class=" text-sm ounded-full p-1">Boite </span>
           <h5 class="font-bold mb-4">{{ $v->boite }}</h5>
           <!-- Description -->
           </div>
           </div>
           <div class="d-flex justify-content-center">
               <span class="font-bold text-white bg-sky-500 rounded-full p-1">{{ $v->prix }} FCFA</span>
           </div>

        </div>
        <!-- CTA -->
        <div class="m-8">
            <a role="button" href="{{route('voiture.show', $v->id)}}" class="text-white bg-sky-500 px-5 py-3 rounded-full hover:bg-purple-700"><i class="fas fa-eye" style="color: rgb(255, 255, 255) ;width: 30px;height: 30px, display: flex; flex-direction: column;"></i></a>
        </div>
    </div>




          @endforeach
          @endif
</div>
    </div>


</div>

</div>
{{-- <form action="{{route('voiture.search')}}" method="get">
    @csrf
    <div class="d-flex justify-content-end ">
        <label for="marque" class="p-2">recherche par marque</label>
      <select name="marque" class=" justify-content-cente mr-1">
          @foreach ( $rechercher as $voiture  )
        <option value="{{ $voiture->marque}}">{{$voiture->marque}}</option>
        @endforeach


      </select>
 <button type="submit" class="btn  bg-sky-500"
 > <i class="fas fa-search"></i></button>

          </div>

  </form> --}}

<style>
  .carousel-image {
    max-height: 500px;
  }
</style>
@endsection
