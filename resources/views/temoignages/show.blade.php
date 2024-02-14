<!DOCTYPE html>
<html lang="en">
  <script src="{{asset('assets/js/app.js')}}"></script>
<head>
    <title>Niata</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('assets/amsify/amsify.suggestags.css')}}">
    <script src="{{asset('assets/amsify/jquery.amsify.suggestags.js')}}"></script>

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
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
            @if (session('success'))

            <div class="alert alert-dismissible alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Sucess !</strong> {{session('success')}}
              </div>

                @endif
            <h1>Détails du témoignage</h1>
            <img src="{{asset('temoignage/'.$temoignage->image)}}" alt="" class="img-fluid ">
            <p class="mt-5 text-black"> <strong>Nom:</strong> {{$temoignage->nom}}</p>
            <p class="mt-3 text-black"> <strong>Prénom:</strong>{{$temoignage->prenom}}</p>
            <p class="mt-3 text-black"> <strong>Domaine:</strong> {{$temoignage->domaine}}</p>
            <p class="mt-3 text-black"> <strong>Message:</strong>{{$temoignage->message}}</p>
            <a class="btn app-btn{{ $temoignage->ispublished ? ' btn-danger' : ' btn-success' }} btn-sm" href="{{ route('temoignage.etat',$temoignage->id) }}">{{ $temoignage->ispublished ? 'Activer' : 'Desactiver' }}</a>

        </div>


</div>
</body>
</html>
