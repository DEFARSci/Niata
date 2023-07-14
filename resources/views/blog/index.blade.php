@extends('layout.app')

@section('content')

<a href="{{route('create')}}"> Ajouter un article </a>

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

@endsection
