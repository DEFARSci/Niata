@extends('layout.app')

@section('content')

<a href="{{route('create')}}"> Ajouter un article </a>

<h1> NOTRE BLOG</h1>

@foreach ($blog as $blog )

<div class="card" style="width: 18rem;">
    <img src="{{asset('images/'.$blog->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$blog->title}}</h5>
      <a href="#" class="btn btn-primary">show</a>
    </div>
  </div>
    
@endforeach

@endsection