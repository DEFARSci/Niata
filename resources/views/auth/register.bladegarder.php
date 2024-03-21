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
    <div class="m-5">
        <h1>Ajouter un utilisateur</h1>
    </div>
    <div class="row">
        <div class="col-md-3"> </div>
<div class="col-md-6">
    <form method="POST" action="{{ route('register') }}">
        @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">nom</label>
                <input type="text" class="form-control" id="nom" :value="old('nom')" required  >

              </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>

            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="confirmePassword" class="form-label"> confirme Password</label>
                <input type="password" class="form-control" id="confirmePassword">
              </div>

            <button type="submit" class="btn btn-primary">Register</button>
          </form>
    </div>
</div>
</body>
</html>

