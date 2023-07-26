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
      
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="row">
           
            <div class="col md-5">
          @if (count($carressols)<3)
            
          
              <h1>Ajouter une Image</h1>
        <form action="{{route('carressol.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
    
            <div class="form-group">
                          <label for="file"></label>
                        <input type="file" class="form-control" id="image" name="image"  value="{{old('image')}}"`>            
             </div>
            <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
        </form>
        @else
        <h1>Supprimer une image  avant d'ajouter</h1>
        @endif
    </div>
    </div>
    <div class="row mt-4">
      
      @foreach ($carressols as $carro)

      <div class="col-md-4 pt-5 "> <!-- Chaque carte occupe 3 colonnes sur une grille de 12 colonnes -->
        <div class="card" style="width: 100%;">
            <img src="{{asset('carressol/'.$carro->image)}}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="...">
            
            
        </div>
        <form  class="d-inline" action="{{route('carressol.destroy', $carro->id)}}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn app-btn-primary mt-3" >supprimer</button>
      
      </form>
    </div>
      

      @endforeach
    </div>
  </div>
  
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