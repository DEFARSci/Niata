@extends('layout.app')

@section('content')
@if((count($images) == 0))
<div id="carouselExampleIndicators" class="carousel slide">
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
</div>
  @else
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      @foreach($images as $key => $image)
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" @if($key == 0) class="active" aria-current="true" @endif aria-label="Slide {{$key+1}}"></button>
      @endforeach
    </div>
    <div class="carousel-inner">
      @foreach($images as $key => $image)
      <div class="carousel-item @if($key == 0) active @endif bg-danger" style="height: 20%">
        <img src="{{asset('carressol/'.$image->image)}}" class="d-block w-100 carousel-image" alt="...">
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
<a href="{{route('create')}}"> Ajouter un article </a><br>
&nbsp&nbsp
<a href="{{route('carressol.create')}}"> Ajouter une image </a>

<div class="container-fluide">
<div class="row">
<div class="col-md-2"> </div>
<div class="col-md-8">
    <div class="row">
    @foreach ($blog as $blog)
    <div class="col-md-4 pt-5 "> <!-- Chaque carte occupe 3 colonnes sur une grille de 12 colonnes -->
        <div class="card" style="width: 100%;">
            <img src="{{asset('images/'.$blog->image)}}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="...">
            <div class="card-body" style="height: 200px; object-fit: cover; display: flex; flex-direction: column; justify-content: space-between;">
              <h5 class="card-title"> {{Str::limit(htmlspecialchars_decode(strip_tags($blog->titre)), 50)}}</h5>
              <h6 class="card-text">
                  {{Str::limit(htmlspecialchars_decode(strip_tags($blog->content)), 100)}}
              </h6>
              <a href="{{route('blog.show', $blog->id)}}" class="btncol-md-3" style="margin-top: auto;"><i class="fas fa-eye" style="color: black ;width: 30px;height: 30px"></i></a>
          </div>
          
        </div>
    </div>
    @endforeach
</div>
    </div>
    <div class="col-md-2"> </div>
</div>
</div>
<style>
  .carousel-image {
    max-height: 500px;
  }
</style>
@endsection