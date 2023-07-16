@extends('layout.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide container-fluide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active bg-danger" style="height: 20% ">
      <img src="{{asset('images/1689270694.jpeg')}}" class="d-block w-100 carousel-image " alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/1689271664.png')}}" class="d-block w-100 carousel-image" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/1689270694.jpeg')}}"class="d-block w-100 carousel-image" alt="...">
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

<a href="{{route('create')}}"> Ajouter un article </a>

<div class="container-fluide">
<div class="row">
<div class="col-md-2"> </div>
<div class="col-md-8">
    <div class="row">
    @foreach ($blog as $blog)
    <div class="col-md-4 pt-3 "> <!-- Chaque carte occupe 3 colonnes sur une grille de 12 colonnes -->
        <div class="card" style="width: 100%;">
            <img src="{{asset('images/'.$blog->image)}}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="...">
            <div class="card-body" style="height: 200px; object-fit: cover; display: flex; flex-direction: column; justify-content: space-between;">
              <h5 class="card-title"> {{Str::limit(htmlspecialchars_decode(strip_tags($blog->title)), 50)}}</h5>
              <h6 class="card-text">
                  {{Str::limit(htmlspecialchars_decode(strip_tags($blog->text)), 100)}}
              </h6>
              <a href="{{route('blog.show', $blog->id)}}" class="btn btn-primary col-md-3" style="margin-top: auto;">show</a>
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