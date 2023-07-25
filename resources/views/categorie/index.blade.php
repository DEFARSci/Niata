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
   
    <div class="containe mt-5">
   
<div class="row">
       <div class="col-md-3"></div>
        <div class="col md-5">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
          <h1>Ajouter une Image</h1>
     <form action="{{route('categorie.store')}}" method="POST">
        @csrf

        <div class="form-group">
          <label for="categorie"></label>
         <input type="text" class="form-control" id="categorie" name="categorie"  value="{{old('categorie')}}"`>            
         </div>
        <button type="submit" class="btn btn-primary mt-2">Ajouter</button>
    </form>
</div>
<div class="col-md-3"></div>
</div>
<div class="container">

<div class="row">
    <div class="col-md-3"></div>
    <div class="col md-5">
<table class="table app-table-hover mb-0 text-left">
    <thead>
        <tr>
            <th class="cell">id</th>
            <th class="cell">Categorie</th>
            <th class="cell">Options</th>
           
    </thead>
    <tbody>
         @foreach ( $categieArticle as $cat) 
            
        <tr>
            <td class="cell">{{$cat->id}}</td>
            <td class="cell"><span class="truncate">{{$cat->categorie}}</span></td>
            <td class="cell"><a class="btn app-btn-secondary" href="{{route('categorie.edit', $cat->id)}}}">modifier</a>
                <form  class="d-inline" action="{{route('categorie.destroy', $cat->id)}}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn app-btn-secondary" >supprimer</button>
                
                </form>
            </td>
        </tr>
        @endforeach 
        
       
    

        
      
    </tbody>
</table>
    </div>
<div class="col-md-3"></div>
</div>
</div>
</div>
 <!-- Javascript -->          
 <script src="{{asset('assets/plugins/popper.min.js')}}"></script>
 <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>  


 <!-- Charts JS -->
 <script src="{{asset('assets/plugins/chart.js/chart.min.js')}}"></script> 
 <script src="{{asset('assets/js/index-charts.js')}}"></script> 
 
 <!-- Page Specific JS -->

</body>
</html> 