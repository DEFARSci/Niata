@extends('layout.app')

@section('content')
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

<a href="{{route('create')}}"> Ajouter un article </a><br>
&nbsp&nbsp
<a href="{{route('carressol.create')}}"> Ajouter une image </a>


<div class="container-fluide">
  <div class="row">
    <div class="col-md-2"> </div>
    <div class="col-md-8">
      <div class="row">
        @foreach ($blog as $blog)
        <div class="col-md-3 mb-4">
          <div class="card" style="width: 100%;">
            <img src="{{asset('images/'.$blog->image)}}" class="card-img-top" style="height: 100px; object-fit: cover;" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$blog->title}}</h5>
              <h6 class="card-text" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$blog->text}}</h6>
              <a href="{{route('blog.show', $blog->id)}}" class="btn btn-primary">show</a>
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

{{-- @extends('layout.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    @foreach($images as $image)
    <div class="carousel-item active bg-danger" style="height: 20% ">
      <img src="{{asset('carressol/'.$image->image)}}" class="d-block w-100 carousel-image " alt="...">
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

<a href="{{route('create')}}"> Ajouter un article </a><br>
&nbsp&nbsp
<a href="{{route('carressol.create')}}"> Ajouter une image </a>


<div class="container-fluide">
<div class="row">
<div class="col-md-2"> </div>
<div class="col-md-8">
    <div class="row">
    @foreach ($blog as $blog)
    <div class="col-md-3 mb-4"> <!-- Chaque carte occupe 3 colonnes sur une grille de 12 colonnes -->
        <div class="card" style="width: 100%;">
            <img src="{{asset('images/'.$blog->image)}}" class="card-img-top" style="height: 100px; object-fit: cover;" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$blog->title}}</h5>
                <h6 class="card-text" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$blog->text}}</h6>
                <a href="{{route('blog.show', $blog->id)}}" class="btn btn-primary">show</a>
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
--}}
