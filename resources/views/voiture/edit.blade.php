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

<div class="row">

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
          Modifier un véhicule
        </h1>

      </div>



      <div class=" my-4">

        <div class="col-md-8">
            <form action="{{route('voiture.update')}}" method="POST"enctype="multipart/form-data" >
                @csrf
               <div class="row p-3 m-3 text-black">
                <input type="text" class="form-control text-black" id="titre" name="id" value="{{$voiture->id}}" hidden>

                <div class="form-group col-md-4">
                    <label for="titre">Marque</label>
                    <input type="text" class="form-control text-black" id="titre" name="marque" value="{{$voiture->marque}}">
                    @error('marque')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group col-md-4">
                    <label for="titre">modele</label>
                    <input type="text" class="form-control text-black" id="titre" name="modele" value="{{$voiture->modele}}">
                    @error('modele')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="titre">annee</label>
                    <input type="number" class="form-control text-black" id="titre" name="annee" value="{{$voiture->annee}}">
                    @error('annee')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row p-3 m-3 text-black">

                  <div class="form-group col-md-4">
                    <label for="titre">Type Moteur</label>


                    <select class="form-control text-black" id="tcategorie" name="moteur" placeholder='type boite' >
                      <option value="{{$voiture->moteur}}">{{$voiture->moteur}}</option>

                        @if ($voiture->moteur != 'Essence')
                        <option value="Essence">Essence</option>
                        @endif
                        @if ($voiture->moteur != 'Diesel')
                        <option value="Diesel">Diesel</option>
                        @endif
                        @if ($voiture->moteur != 'Hybride')
                        <option value="Hybride">Hybride</option>
                        @endif
                        @if ($voiture->moteur != 'Electrique')
                        <option value="Electrique">Electrique</option>

                        @endif
                        

                    </select>

                    @error('moteur')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group col-md-4">
                    <label for="titre">kilometrage</label>
                    <input type="number" class="form-control text-black" id="titre" name="kilometrage" value="{{$voiture->kilometrage}}">
                    @error('kilometrage')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group col-md-4">
                    <label for="titre">etat</label>
                    <input type="text" class="form-control text-black" id="titre" name="etat" value="{{$voiture->etat}}">
                    @error('etat')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row p-3 m-3 text-black">
                  <div class="form-group col-md-4">
                    <label for="titre">boite vitesse</label>


                    <select class="form-control text-black" id="tcategorie" name="boite" placeholder='type boite' >
                      <option value="{{$voiture->boite}}">{{$voiture->boite}}</option>
                      @if ( $voiture->boite  != 'automatique')
                      <option value="automatique">Automatique</option>
                      @endif
                      @if ( $voiture->boite !='manuelle')
                      <option value="manuelle">Manuelle</option>
                      @endif
                    </select>
                    @error('boite')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group col-md-4">
                    <label for="titre">caracteristique</label>
                    <input type="text" class="form-control text-black" id="titre" name="caracteristique" value="{{$voiture->caracteristique}}">
                    @error('caracteristique')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group col-md-4">
                    <label for="titre">prix</label>
                    <input type="number" class="form-control text-black" id="titre" name="prix" value="{{$voiture->prix}}">
                    @error('prix')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                  <div class="form-group col-md-4 p-3 m-3 text-black">
                    <div>
                      <img src="{{asset('voiture/'.$voiture->image)}}" width="200px" height="200px" alt="">
                    </div><br />
                      <label for="file">Image</label>
                    <input type="file" class="form-control text-black" id="image" name="image" value="{{old('image')}}">
                    @error('image')
                    <div class="text-danger">{{ $message }}
                    @enderror
                  </div>
                  </div>

                <button type="submit " class="btn bg-black text-white mt-4">Ajouter</button>
              </form>

        </div>

      </div>

      <!-- /.card -->

    </div>
    <!-- /.col-lg-9 -->

  </div>

</div>

 <!-- Javascript -->
 <script src="{{asset('assets/plugins/popper.min.js')}}"></script>
 <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
 <script src="{{ asset('js/tinymce/tinymce.js') }}"></script>

 <!-- Charts JS -->
 <script src="{{asset('assets/plugins/chart.js/chart.min.js')}}"></script>
 <script src="{{asset('assets/js/index-charts.js')}}"></script>

 <!-- Page Specific JS -->


</body>
</html>
