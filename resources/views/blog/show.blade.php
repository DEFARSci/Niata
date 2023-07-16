@extends('layout.app')

@section('content')
<div class=" d-flex justify-content-center p-3"><h1> Niata ...</h1></div>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 ">
            <div class="card">
                <h1 class="card-title font-weight-bold p-3 text-uppercase  "><strong>{{ $blog->title }}</strong> </h1>
                <div class="card-body">
                <img src="{{ asset('images/'.$blog->image) }}" class="card-img-top mb-5" style="object-fit: cover; height: 300px;">
                    <p class="card-text ">{!! $blog->text !!}</p>
                </div>
                <div class="circle m-3">
                <a href="javascript:history.back()" class="btn">
                   
                      <i class="fas fa-arrow-left"></i> 
                  </a>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
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
