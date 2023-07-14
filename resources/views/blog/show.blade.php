@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 ">
            <div class="card">
                <img src="{{ asset('images/'.$blog->image) }}" class="card-img-top" style="object-fit: cover; height: 200px;" alt="...">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{ $blog->title }}</h5>
                    <p class="card-text">{{ $blog->text }}</p>
                   <a href="javascript:history.back()" class="btn btn-primary">Retour</a>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
