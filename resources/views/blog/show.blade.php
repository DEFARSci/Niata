@extends('layout.app')

@section('content')
{{-- <div class=" d-flex justify-content-center p-3"><h1> Niata ...</h1></div> --}}
<div class="w-75 mx-auto mt-5 bg-black ">
    <div >
        <img src="{{ asset('blog/'.$blog->image) }}" class="card-img-top mb-5 mt-5 rounded-5" style="object-fit: cover;  height: 600px; ">
        <h1 class="font-weight-bold p-3 text-uppercase" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center; background-color: rgba(0, 0, 0, 0.5); padding: 10px;">
            <strong>{{ $blog->titre }}</strong>
        </h1>
    </div>
</div>

<div class=" w-75   mx-auto pt-3 bg-white  rounded-5">
    <div class="row">
        <div class="col-md-12 col-12 col-lg-3 d-flex p-3 justify-content-start m-4">
            <img src="{{ asset('blog/'.$blog->image) }}" class="rounded-circle " style="width: 50px; height: 50px;">
            <h6 class="card-title d-block m-2 ">Hauteur name <br> janvier 2023</h6>

        </div>
      <hr>
    </div>
    <div class="d-flex  justify-content-start m-3">
        <h1><strong>{{ $blog->titre }}</strong>sudo</h1>
    </div>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-12 ">
                <p class="card-text text-justify" style="font-size: 30px; line-height: 1.6; padding-top: 20px;text-justify: auto;">
                    {!! $blog->content !!}
                 </p>
            </div>
            <div class="col-md-12 col-lg-4 col-12 border  rounded-5 " style="background-color: black">
                <h3 class="text-white text-center mt-3">Les 3 derniers articles</h3>
                <hr class="text-white">
                @foreach ($blogs as $blog)
                <div class="row ">
                    <div class="col-md-12 col-sm-12 mt-5 ">
                        <div class="card border-none ">
                          <div class="card-image col-sm-12" >
                            <img src="{{ asset('blog/'.$blog->image) }}" alt="" class="img-fluid col-sm-12 " style="height: 20rem">
                          </div>
                        </div>
                        <div class="card-body text-uppercase text-white ">
                          <h6 class="card-title">
                           {{Str::limit(htmlspecialchars_decode(strip_tags ($blog->titre)), 27) }}
                          </h6>
                          <p class="text-lowercase">{{ Str::limit(htmlspecialchars_decode(strip_tags($blog->content)), 200) }}</p>

                          <div class="m-8">
                              <a role="button" href="{{route('blog.show', $blog->id)}}" class="text-decoration-none bg-dark text-white rounded-5 p-1 mb-2 hover:bg-white hover:text-dark">En savoir plus... </a>
                          </div>
                          <hr>
                       </div>
                      </div>
                </div>
                @endforeach
            </div>

</div>
    </div>
</div>
<style>
    .circle {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background-color: #007bff;
      color: #fff;
      font-size: 20px;
      cursor: pointer;
    }
  </style>
@endsection
