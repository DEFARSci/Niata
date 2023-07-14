@extends('layout.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
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

<h1> NOTRE BLOG</h1>

<div class="container">
    <div class="row">
        @foreach ($blog as $blog )

<div class="card p-3" style="width: 18rem;">
    <img src="{{asset('images/'.$blog->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$blog->title}}</h5>
      <a href="#" class="btn btn-primary">show</a>
    </div>
  </div>
    
@endforeach
    </div>
</div>
<style>
  .carousel-image {
    max-height: 500px;
  }
</style>
@endsection