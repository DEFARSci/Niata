@extends('layout.app')

@section('content')
<div class=" d-flex justify-content-center p-3"><h1> Niata ...</h1></div>
<div class="container">
    <div style="position: relative;">
        <img src="{{ asset('images/'.$blog->image) }}" class="card-img-top mb-5" style="object-fit: cover; ">
        <h1 class="font-weight-bold p-3 text-uppercase" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center; background-color: rgba(0, 0, 0, 0.5); padding: 10px;">
            <strong>{{ $blog->title }}</strong>
        </h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7 ">
            <div class="container">
                <div class="row">

                        <div class="col-md-2 d-flex justify-content-end">
                            <img src="{{ asset('images/'.$blog->image) }}" class="rounded-circle mr-3" style="width: 50px; height: 50px;">
                        </div>
                        <div class=" col-md-3 ">
                            
                            <h6 class="card-title">Hauteur name</h6>
                            <h6 class="card-title text" style="color: #80868cb7">10 janvier 2023</h6>
                        </div>
             </div>
            </div>
                    <p class="card-text" style="font-size: 18px; line-height: 1.6; padding-top: 20px;">
                        {!! $blog->text !!}
                    </p>
                
                <div class="circle m-3">
                <a href="/blog" class="btn">
                   
                      <i class="fas fa-arrow-left"></i> 
                  </a>
                </div>
           
        </div>
        <div class="col-md-3 mt-5">
            @foreach ($blogs as $blog)
            <div class="row">
                <div class="card mt-4" style="width: 100%;">
                    <img src="{{asset('images/'.$blog->image)}}" class="card-img-top mt-2" style="height: 200px; object-fit: cover;" alt="...">
                    <div class="card-body" style="height: 200px; object-fit: cover; display: flex; flex-direction: column; justify-content: space-between;">
                      <h5 class="card-title"> {{Str::limit(htmlspecialchars_decode(strip_tags($blog->title)), 50)}}</h5>
                      <h6 class="card-text">
                          {{Str::limit(htmlspecialchars_decode(strip_tags($blog->text)), 100)}}
                      </h6>
                      <a href="{{route('blog.show', $blog->id)}}" class="btncol-md-3" style="margin-top: auto;"><i class="fas fa-eye" style="color: black ;width: 30px;height: 30px"></i></a>
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
