
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Liste des demandes</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="{{asset('assets/plugins/fontawesome/js/all.min.js')}}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/portal.css')}}">

</head>

<body class="app">
<!--//app-header-->
<header class="app-header fixed-top">
    @include('layout.header')
    @include('layout.sidebar')
</header>
@include('layout.content')
<div class="container">
@if (session('success'))
    <div class="alert alert-success alert-dismissable m-3 " id="success-alert">
        {{session('success')}}
    </div>

    @endif
    <h1>Modifier la Demande Client</h1>
    <div class="card">
        <div class="card-header">
            Modifier la Demande
        </div>
        <div class="card-body">
            <form action="{{ route('demandeClient.update', $demandeClient->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nom" class="form-label text-black">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" value="{{ $demandeClient->nom }}" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label text-black">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $demandeClient->email }}" required>
                </div>
                <div class="form-group">
                    <label for="telephone" class="form-label text-black">Téléphone</label>
                    <input type="number" name="telephone" id="telephone" class="form-control" value="{{ $demandeClient->telephone }}">
                </div>
                <div class="form-group">
                    <label for="marque" class="form-label text-black">Marque</label>
                    <input type="text" name="marque" id="marque" class="form-control" value="{{ $demandeClient->marque }}" required>
                </div>
                <div class="form-group">
                    <label for="modele" class="form-label text-black">Modèle</label>
                    <input type="text" name="modele" id="modele" class="form-control" value="{{ $demandeClient->modele }}" required>
                </div>
                <div class="form-group">
                    <label for="message" class="form-label text-black">Message</label>
                    <textarea name="infoSupp" id="message" class="form-control">{{ $demandeClient->infoSupp }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                <a href="{{ route('demandeClient.index') }}" class="btn btn-secondary">Annuler</a>
            </form>
        </div>
    </div>
</div>