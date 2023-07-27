@extends('layout.app')

@section('content')
<div class="container  p-3 mt-5">
  @if (session('success'))
<div class="alert alert-success alert-dismissable m-3">
    {{session('success')}}
</div>

@endif
    <div class="row m-5">
       
        <div class="col md-5">
          <h1>Contactez-nous</h1>
            <form action="{{route('mail')}}" method="POST">
              @csrf
                <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Enter prénom" name="prenom" required>
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Enter nom" name="nom" required>
                    </div>
                  </div>
                  <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="sujet" placeholder="Enter sujet" name="sujet" required>
                  </div>
                <div class="mb-3 mt-3">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                  </div>
                <div class="mb-3">
                 
                  <textarea class="form-control" rows="5" id="comment"  placeholder="Enter message" name="message" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Envoyer</button>
              </form>
        </div>
      
    </div>
</div>
@endsection