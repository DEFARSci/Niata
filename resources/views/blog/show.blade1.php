@extends('layout.app')

@section('content')
{{-- <div class=" d-flex justify-content-center p-3"><h1> Niata ...</h1></div> --}}
<div class="w-75 mx-auto mt-5 ">
    <div style="position: relative;">
        <img src="{{ asset('blog/'.$blog->image) }}" class="card-img-top mb-5 mt-5 rounded-5" style="object-fit: cover;  height: 600px; ">
        <h1 class="font-weight-bold p-3 text-uppercase" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center; background-color: rgba(0, 0, 0, 0.5); padding: 10px;">
            <strong>{{ $blog->titre }}</strong>
        </h1>
    </div>
</div>

<section class="section-4 bg-2">
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class=" rounded-3 p-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="jobs.html"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Back to Jobs</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container job_details_area">
        <div class="row pb-5">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="job_details_header">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">

                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="descript_wrap white-bg">
                        <div class="single_wrap">
                            <h4>{{ $blog->titre }}</h4>
                            <p> {!! $blog->content !!}</p>
                        </div>

                        <div class="border-bottom"></div>
                        <div class="pt-3 text-end">
                            <a href="#" class="btn btn-secondary">Save</a>
                            <a href="#" class="btn btn-primary">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow border-0">
                    <div class="job_sumary">
                        <div class="summery_header pb-1 pt-4">
                            <h3>Job Summery</h3>
                        </div>
                        <div class="job_content pt-3">
                            <ul>
                                <li>Published on: <span>12 Nov, 2019</span></li>
                                <li>Vacancy: <span>2 Position</span></li>
                                <li>Salary: <span>50k - 120k/y</span></li>
                                <li>Location: <span>California, USA</span></li>
                                <li>Job Nature: <span> Full-time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card shadow border-0 my-4">
                    <div class="job_sumary">
                        <div class="summery_header pb-1 pt-4">
                            <h3>Company Details</h3>
                        </div>
                        <div class="job_content pt-3">
                            <ul>
                                <li>Name: <span>XYZ Company</span></li>
                                <li>Locaion: <span>Noida</span></li>
                                <li>Webite: <span>www.example.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
