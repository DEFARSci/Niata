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
          Ajouter un article
        </h1>

      </div>
@if (count($categorie) != 0)


      <div class=" my-4">

        <div class="">
            <form action="{{route('store')}}" method="POST"enctype="multipart/form-data" >
                @csrf
                <div class="form-group text-black">
                  <label for="tcategorie">Categorie</label>
                  <select class="form-control" id="tcategorie" name="categorie" placeholder='categorie'>
                    <option value="">...</option>
                    @foreach ($categorie as $categorie)
                      <option value="{{$categorie->id}}">{{$categorie->categorie}}</option>)

                    @endforeach
                  </select>
                  @error('titre')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group text-black">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" value="{{old('titre')}}">
                    @error('titre')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group text-black">
                      <label for="content">Contenu</label>
                      <textarea class="form-control tinymce-editor " id="content" name="content" cols="30" rows="5" value={{old('content')}}>{{old('content')}}</textarea>
                      @error('content')
                      <div class="text-danger">{{ $message }}
                      @enderror
                  </div>
                  <div class="form-group text-black">
                      <label for="file">Image</label>
                    <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
                    @error('content')
                    <div class="text-danger">{{ $message }}
                    @enderror
                  </div>
                  </div>




                <button type="submit " class="btn mt-4 text-white bg-black">Ajouter</button>
              </form>

        </div>

      </div>
      @else
      <div class="mt-4">
         <a class="btn btn-primary mt-4" href="{{route('categorie.create')}}">Veuillez ajouter une categorie</a>
      </div>
      <!-- /.card -->
@endif
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





<script>


document.addEventListener('DOMContentLoaded', function() {
  tinymce.init({
    selector: '.tinymce-editor',
    plugins: 'advlist link image',
    toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright ',
  });
});

$('input[name="country"]').amsifySuggestags();

</script>
</body>
</html>
