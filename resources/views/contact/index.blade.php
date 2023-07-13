@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
       
        <div class="col md-5">
            <form action="/action_page.php">
                <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Enter prénom" name="prenom">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Enter nom" name="nom">
                    </div>
                  </div>
                <div class="mb-3 mt-3">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  </div>
                <div class="mb-3">
                 
                  <textarea class="form-control" rows="5" id="comment"  placeholder="Enter message" name="message"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Envoyer</button>
              </form>
        </div>
      
    </div>
</div>
@endsection