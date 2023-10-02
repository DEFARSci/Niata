@extends('layout.app')

@section('content')
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-70 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('defaultimg/auto1.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('defaultimg/auto2.jpeg')}}"class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{asset('defaultimg/auto3.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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

  <div class="flex justify-center items-center mt-5 containe " style="background-color: rgba(47, 48, 47, 0.082)">
    

   
    <div class="row">
        <div class="col-md-7">
            <div class="flex justify-center items-center mt-5 ">
                <span class="text-lg font-semibold text-center whitespace-nowrap dark:text-white m-8">
            	<p class="">vendre sa voiture simplement Lorem ipsum dolor sit amet consectetur adipisicing elit. <br/>
                    Reprehenderit quia sequi et assumenda? Laborum autem, quisquam minus ipsam <br/>
                    sunt officia dignissimos aliquam, maxime saepe blanditiis obcaecati, earum a assumenda in!</p>
                </span>
            </div>
            
            <div class="flex justify-center items-center  ">
                <span class="text-lg font-semibold text-center whitespace-nowrap dark:text-white m-8">
            	
                   <a type="button" class="bg-primary text-white p-3 rounded-3xl hover:bg-black" href="{{route('evaluation.index')}}">Estimez le prix de votre voiture</a>
                </span>
            </div>
        </div>
        <div class="col-md-5 mt-5 flex justify-end items-center ">
        <img src="{{asset('defaultimg/carimg.png')}}" alt=""  class="img-fluid" >
        </div>
    </div>
  </div>

<hr>
<div class="flex justify-center items-center " style="background-color: rgba(47, 48, 47, 0.082)">
    <span class="text-lg font-semibold text-center whitespace-nowrap dark:text-white m-8">
        Recherche
    </span>
</div>
     <div class="d-flex container-fluid justify-content-center" style="background-color: rgba(47, 48, 47, 0.082)">
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
          {{-- <div class="form-group col-md-6 mb-3 flex-1 justify-content-center">
                   
            <input class="form-control" placeholder="recherche" type="text"value="{{Request::get('search')}}" name="search">
           
          </div> --}}
          <div class="col-md-3"></div>
          </div>

            </div>
               
          </form>
        </div>
          
       
     </div> 
  <div class="flex justify-center items-center mt-5 " style="background-color: rgba(47, 48, 47, 0.082)">
    <span class="text-lg font-semibold text-center whitespace-nowrap dark:text-white m-8">
        Nos Offres les plus récentes
    </span>
</div>
{{-- @foreach (
$voiture as $v )
    

<div class="card" style="width: 18rem;">
    <img src="{{ asset('voiture/'.$v->image) }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  @endforeach --}}

  <div class="container-fluide">
    <div class="row">
    <div class="col-md-1"> </div>
    <div class="col-md-10 mt-9">
        <div class="row">
        @foreach ($voiture as $v)
    <div class="w-96 m-4  bg-white rounded-3xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
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
    </div>
        </div>
        <div class="col-md-1"> </div>
    </div>
    </div>


<div class="flex justify-center items-center mt-5 " style="background-color: rgba(47, 48, 47, 0.082)" >
    <h1 class=" text-2xl font-semibold text-center whitespace-nowrap dark:text-white m-8">
        Les Dernier article
    </h1>
</div>
    <div class="container-fluide">
        <div class="row">
        <div class="col-md-1"> </div>
        <div class="col-md-10 mt-9">
            <div class="row">
            @foreach ($blog as $blog)
        <div class="w-96 m-4  bg-white rounded-3xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
            <!-- Image -->
            <img class="h-72 w-full object-cover rounded-3xl" src="{{ asset('blog/'.$blog->image) }}" alt="">
            <div class="m-2">
                <!-- Heading -->
                <h2 class="font-bold text-2xl mb-4">{{$blog->titre}}</h2>
                <!-- Description -->
                <p class="text-lg text-gray-600">{{ Str::limit(htmlspecialchars_decode(strip_tags($blog->content)), 200) }}</p>
            </div>
            <!-- CTA -->
            <div class="m-8">
                <a role="button" href="{{route('blog.show', $blog->id)}}" class="text-white bg-sky-500 px-5 py-3 rounded-full hover:bg-purple-700"><i class="fas fa-eye" style="color: rgb(255, 255, 255) ;width: 30px;height: 30px, display: flex; flex-direction: column;"></i></a>
            </div>
        </div>
        
        
        
            
            @endforeach
        </div>
            </div>
            <div class="col-md-1"> </div>
        </div>
        </div>


@endsection