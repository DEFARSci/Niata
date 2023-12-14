@extends('layout.app')

@section('content')



@if((count($images) == 0))
 <div id="carouselExampleSlidesOnly" class="carousel slide h-5  mt-5 pt-4 mb-6 rounded-5 w-75 mx-auto" data-bs-ride="carousel">
    <div class="carousel-inner bg-info rounded-5 mt-5" style="height: 20rem ">
      <div class="carousel-item active " style="height: 50px ">
        <img src="{{ asset('defaultimg/blog.jpeg') }}" class="d-block w-100 h-1 rounded-9" alt="..." style="height: 20rem ">
      </div>
      <div class="carousel-item h-1">
        <img src="{{asset('defaultimg/blog1.png')}}" class="d-block w-100 h-1 rounded-9" alt="..."style="height: 20rem">
      </div>
      <div class="carousel-item h-1">
        <img src="{{asset('defaultimg/blog3.jpeg')}}" class="d-block w-100 h-1 rounded-9" alt="..."style="height: 20rem">
      </div>

    </div>
  </div>



  @else
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      @foreach($images as $key => $image)
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" @if($key == 0) class="active" aria-current="true" @endif aria-label="Slide {{$key+1}}"></button>
      @endforeach
    </div>
    <div class="carousel-inner">
      @foreach($images as $key => $image)
      <div class="carousel-item @if($key == 0) active @endif bg-danger" style="height: 30%">
        <img src="{{asset('/carressol/'.$image->image)}}" class="d-block w-100 carousel-image" alt="...">
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endif

<div class="border w-75 mx-auto mt-5 col-md-12 rounded-5 d-flex justify-content-center">


    <div class="row col-md-12 col-sm-12 d-flex justify-content-center pb-3">
      @foreach ($blog as $blog)
      <div class="col-md-3 col-sm-12 col-lg-3 mt-5 p-1 m-4  rounded-5 border " style="background-color: rgb(255, 255, 255)">

          <div class=" col-sm-12 p-3 border-none " >
            <img src="{{ asset('blog/'.$blog->image) }}" alt="" class="img-fluid col-sm-12 rounded-5 " style="height: 20rem;background-color: rgb(231, 217, 217);">
          </div>

        <div class="card-body ">
          <h6 class="card-title text-uppercase ">
                {{Str::limit(htmlspecialchars_decode(strip_tags ($blog->titre)), 27) }}


          </h6>
      <p class="">{{ Str::limit(htmlspecialchars_decode(strip_tags($blog->content)), 210) }}</p>
      <hr>
        <div class="m-8">
            <a role="button" href="{{route('blog.show', $blog->id)}}" class="text-decoration-none bg-dark text-white rounded-5 p-1 mb-2 hover:bg-white hover:text-dark">En savoir plus... </a>
        </div>
    </div>
      </div>

      {{-- <div class="w-96 m-4  bg-white rounded-3xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
          <!-- Image -->
          <img class="h-72 w-full object-cover rounded-3xl" src="{{ asset('blog/'.$blog->image) }}" alt="">
          <div class="m-2">
              <!-- Heading -->
              <h2 class="font-bold text-2xl mb-4">{{$blog->titre}}</h2>
              <!-- Description -->
              <p class="text-lg text-gray-600">{{ Str::limit(htmlspecialchars_decode(strip_tags($blog->content)), 200) }}</p>
          </div>
          <!-- CTA -->
          <div class="m-8">
              <a role="button" href="{{route('blog.show', $blog->id)}}" class="text-white bg-sky-500 px-5 py-3 rounded-full hover:bg-purple-700"><i class="fas fa-eye" style="color: rgb(255, 255, 255) ;width: 30px;height: 30px, display: flex; flex-direction: column;"></i></a>
          </div>
      </div> --}}




          @endforeach
</div>

{{-- </div> --}}
</div>
<style>
  .carousel-image {
    max-height: 500px;
  }

</style>
@endsection
