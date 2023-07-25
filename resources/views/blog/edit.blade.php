<!DOCTYPE html>
<html lang="en"> 
  <script src="{{asset('assets/js/app.js')}}"></script> 
<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>
    
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
          Modifier un article
        </h1>
        
      </div>

      <div class=" my-4">
        
        <div class="">
            <form action="{{route('blog.update')}}" method="POST" enctype="multipart/form-data" >
                @method('POST')
                @csrf
                <input type="text" class="form-control" id="id" hidden name="id" value="{{$blog->id}}">
                <div class="form-group">
                  <label for="tcategorie">Categorie</label>
                  <select class="form-control" id="tcategorie" name="categorie" placeholder='categorie'>
                    <option value="{{$blog->id}}">{{$blog->categorie}}</option>
                    @foreach ($categorie as $categorie)
                      <option value="{{$categorie->id}}">{{$categorie->categorie}}</option>)
                      
                    @endforeach
                  </select>
                  @error('titre')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" value="{{$blog->titre}}">
                    @error('titre')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                      <label for="content">Contenu</label>
                      <textarea class="form-control tinymce-editor " id="content" name="content" cols="30" rows="5" >{{$blog->content}}</textarea>
                      @error('content')
                      <div class="text-danger">{{ $message }}
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="file">Image</label>
                    <input type="file" class="form-control" id="image" name="image" value="{{basename($blog->image)}}" >
                    @error('content')
                    <div class="text-danger">{{ $message }}
                    @enderror
                  </div>

                <button type="submit " class="btn btn-primary mt-4">Ajouter</button>
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





<script>


document.addEventListener('DOMContentLoaded', function() {
  tinymce.init({
    selector: '.tinymce-editor',
    plugins: 'advlist link image',
    toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright ',
  });
});

</script>
</body>
</html> 