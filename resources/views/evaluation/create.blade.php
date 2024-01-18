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
          Ajouter un véhicule de référence
        </h1>

      </div>



      <div class=" my-4">

        <div class="col-md-8">
            <form action="{{route('evaluation.store')}}" method="POST" >
                @csrf
               <div class="row p-3 m-3 text-black">

                <div class="form-group col-md-4">
                    <label for="titre">Marque</label>
                    <input type="text" class="form-control text-black" id="titre" name="marque" value="{{old('marque')}}">
                    @error('marque')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group col-md-4">
                    <label for="titre">modele</label>
                    <input type="text" class="form-control  text-black" id="titre" name="modele" value="{{old('modele')}}">
                    @error('modele')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group col-md-4">
                    <label for="titre">annee</label>
                    <input type="number" class="form-control text-black" id="titre" name="annee" value="{{old('annee')}}">
                    @error('annee')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row p-3 m-3 text-black">

                  <div class="form-group col-md-4">
                    <label for="titre">type carburant</label>


                    <select class="form-control text-black" id="tcategorie" name="type_carburant" placeholder='type boite' >
                      <option value="">...</option>


                        <option value="Essence">Essence</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Hybride">Hybride</option>
                        <option value="Electrique">Electrique</option>

                    </select>

                    @error('type_carburant')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group col-md-4">
                    <label for="titre">kilometrage</label>
                    <input type="number" class="form-control text-black" id="titre" name="kilometrage" value="{{old('kilometrage')}}">
                    @error('kilometrage')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group col-md-4">
                    <label for="titre">boite vitesse</label>


                    <select class="form-control text-black" id="tcategorie" name="boite" placeholder='type boite' >
                      <option value="">...</option>


                        <option value="automatique">Automatique</option>
                        <option value="manuelle">Manuelle</option>
                    </select>
                    @error('boite')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>

                </div>
                <div class="row p-3 m-3 text-black">


                  <div class="form-group col-md-4">
                    <label for="prix">prix</label>
                    <input type="number" class="form-control text-black" id="prix" name="prix" value="{{old('prix')}}">
                    @error('prix')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group col-md-4">
                    <label for="titre">Estimation tranmission</label>
                    <input type="number" class="form-control text-black" id="titre" name="estimationTransmission" value="{{old('estimationTransmission')}}">
                    @error('estimationTransmission')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group col-md-4">
                    <label for="estimationCarburant">Estimation carburant</label>
                    <input type="number" class="form-control text-black" id="estimationCarburant" name="estimationCarburant" value="{{old('estimationCarburant')}}">
                    @error('estimationCarburant')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row p-3 m-3 text-black">
                    <div class="form-group col-md-4">
                      <label for="titre">Estimation kilometrage</label>
                      <input type="number" step="0.00001" class="form-control text-black" id="titre" name="estimationKm" value="{{old('estimationKm')}}">
                      @error('estimationKm')
                      <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="prix_conteur_0km">Prix à Zéro kilometrage</label>
                        <input type="number"  class="form-control text-black" id="prix_conteur_0km" name="prix_conteur_0km" value="{{old('prix_conteur_0km')}}">
                        @error('prix_conteur_0km')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                  </div>

                <button type="submit " class="btn text-white bg-black">Ajouter</button>
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
