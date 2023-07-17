@extends('layout.app')

@section('content')

 <!DOCTYPE html>
<html>
<head>
    <title>Add Image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
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
          <h1>Ajouter une Image</h1>
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
                      <label for="file"></label>
                    <input type="file" class="form-control" id="image" name="image"  value="{{old('image')}}"`>            
         </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
</div>
</body>
</html> 
@endsection
