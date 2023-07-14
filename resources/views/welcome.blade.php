@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Bienvenue sur notre site</h1>
            <p>Ceci est notre page d'accueil.</p>
            <a href="{{route('blog')}}" class="btn btn-primary">Voir les actualités</a>
        </div>
    </div>
</div>
@endsection
