@extends('layout.app')

@section('content')

@if((count($images) == 0))

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


{{-- <div id="carouselExampleIndicators" class="carousel slide mt-4 " >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('defaultimg/blog.jpeg')}}" class="d-block w-100 carousel-image" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('defaultimg/blog1.png')}}" class="d-block w-100 carousel-image" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('defaultimg/blog3.jpeg')}}" class="d-block w-100 carousel-image" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> --}}
  @else
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      @foreach($images as $key => $image)
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" @if($key == 0) class="active" aria-current="true" @endif aria-label="Slide {{$key+1}}"></button>
      @endforeach
    </div>
    <div class="carousel-inner">
      @foreach($images as $key => $image)
      <div class="carousel-item @if($key == 0) active @endif bg-danger" style="height: 30%">
        <img src="{{asset('/carressol/'.$image->image)}}" class="d-block w-100 carousel-image" alt="...">
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endif
{{-- <a href="{{route('create')}}"> Ajouter un article </a><br>
&nbsp&nbsp
<a href="{{route('carressol.create')}}"> Ajouter une image </a>
&nbsp&nbsp
<a href="{{route('categorie.create')}}"> Ajouter un categorie </a> --}}

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
<style>
  .carousel-image {
    max-height: 500px;
  }
</style>
@endsection