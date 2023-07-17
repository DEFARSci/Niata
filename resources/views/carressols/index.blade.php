@extends('layout.app')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title></title>

    </head>

    <body>


        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($images as $image)
                    <div class="carousel-item @if ($loop->first) active @endif">
                        <img src="{{ asset('carressol/' . $image->image) }}" class="d-block w-100" alt="Image">
                    </div>
                @endforeach

           {{--  </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div> --}}
    </body>

    </html>
@endsection
