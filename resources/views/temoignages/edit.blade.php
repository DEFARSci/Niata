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

<<div class="row">

    <div class="col-lg-2">
     {{-- @include('include.aside') --}}
    </div>
    <!-- /.col-lg-3 -->

    <div class="col-lg-9">
        @if (session('success'))
            <div class="alert alert-success alert-dismissable m-3">
                {{session('success')}}
            </div>

        @endif
      <!-- /.card -->
      <div class="mt-4">
        <h1>
          Modifier un temoignage
        </h1>

      </div>

      <div class="container mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-black">
                <form action="{{route('temoignage.update', $temoignage->id)}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group col-12">
                        <label for="titre">prenom</label>
                        <input type="text" class="form-control text-black" id="titre" name="prenom" value="{{$temoignage->prenom}}">
                        @error('marque')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group col-12">
                        <label for="titre">nom</label>
                        <input type="text" class="form-control text-black" id="titre" name="nom" value="{{$temoignage->nom}}">
                        @error('marque')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group col-12">
                        <label for="titre">Domaine</label>
                        <input type="text" class="form-control text-black" id="titre" name="domaine" value="{{$temoignage->domaine}}">
                        @error('domaine')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group col-12">
                        <label for="titre">message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" cols="10">{{ $temoignage->message }}</textarea>
                        @error('marque')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group col-12">
                        <label for="titre">photo</label>
                        <input type="file" class="form-control text-black" id="titre" name="image" value="{{$temoignage->image}}">
                        @error('marque')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>



                    <button type="submit " class="btn text-white bg-black mt-3">Ajouter</button>
                  </form>
            </div>
        </div>
    </div>


      <!-- /.card -->

    </div>
    <!-- /.col-lg-9 -->

  </div>

</body>

</html>
