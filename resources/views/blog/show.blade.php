@extends('layout.app')

@section('content')
{{-- <div class=" d-flex justify-content-center p-3"><h1> Niata ...</h1></div> --}}
<div class="container">
    <div style="position: relative;">
        <img src="{{ asset('blog/'.$blog->image) }}" class="card-img-top mb-5" style="object-fit: cover;  height: 600px; ">
        <h1 class="font-weight-bold p-3 text-uppercase" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center; background-color: rgba(0, 0, 0, 0.5); padding: 10px;">
            <strong>{{ $blog->titre }}</strong>
        </h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7 ">
            <div class="container">
                
                <div class="row ">

                        <div class="col-md-2 d-flex justify-content-end">
                            <img src="{{ asset('blog/'.$blog->image) }}" class="rounded-circle mr-3" style="width: 50px; height: 50px;">
                        </div>
                        <div class=" col-md-3 ">
                            
                            <h6 class="card-title">Hauteur name</h6>
                            <h6 class="card-title text" style="color: #80868cb7">10 janvier 2023</h6>
                        </div>
             </div>
            </div>
                    <p class="card-text" style="font-size: 30px; line-height: 1.6; padding-top: 20px;">
                        {!! $blog->content !!}
                    </p>
                
                <div class="circle m-3">
                <a href="{{route('blog')}}" class="btn">
                   
                      <i class="fas fa-arrow-left"></i> 
                  </a>
                </div>
           
        </div>
        <div class="col-md-3 mt-5">
            <h3>Les 3 derniers articles</h3>
            @foreach ($blogs as $blog)
            <div class="row">
                <div class="w-96 m-4  bg-white rounded-3xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
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
                </div>
            </div>
            @endforeach
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
