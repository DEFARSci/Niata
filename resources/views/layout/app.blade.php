<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="{{ asset('js/tinymce/tinymce.js') }}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <!-- Bootstrap 5 CSS -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css'>
         <!-- Font Awesome CSS -->
       <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>


        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
      </head>
        <title>Niata</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Bootstrap 5 CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

<title>NIATA </title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg container fixed-top">
        <div class="container-fluid ">
            <a class="navbar-brand text-lg-center" href="{{ '/' }}">NIATA             <span class="d-none d-lg-inline">  |</span></a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>



          <div class="collapse navbar-collapse   " id="navbarExample">
            <ul class="navbar-nav me-auto mb-0">
                <li class="nav-item :hover(bg-black)">
                    <a class="nav-link text-black "   href="/">Accueil</a>
                  </li>
              <li class="nav-item">
                <a class="nav-link text-black " href="{{ route('voiture.index') }}" >
                    Cataloge
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link text-black "  href="{{route('blog')}}" >
                    Actualités
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link text-black "  href="{{ route('contact') }} "  >
                    Contact
                </a>
              </li>
            </ul>
            {{-- <div class="d-flex align-items-center flex-column flex-lg-row">
              <form class="me-2 mb-2 mb-lg-0">
                <input type="text" class="form-control form-control-sm" placeholder="Search" />
              </form>
              <a class="btn btn-primary" href="">Sign up</a>
            </div> --}}
          </div>
        </div>
      </nav>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        {{-- <div class="container-fluid mb-5">
         <div class="row">
           <div class="col-md-1"></div> --}}
           <div class="">
             @yield('content')
           {{-- </div>
           <div class="col-md-1"></div>

         </div> --}}


        {{-- </div> --}}
        <div class="container footer mt-5 mb-5">
            <div class="row">
          <div class="col-lg-2 col-12 col-md-4 mx-3 ">
            <div >
           <h5 class="text-white">À propos de NIATA</h5>
           <ul class="list-group list-group-flush text-white a-propos">
            <li class="  text-white  bg-transparent fs-6 p-0 m-0"><a href="" class="text-white
                ">Qui sommes-nous ? </a> </li>
            <li class="  text-white  bg-transparent"><a href="" class="text-white
                ">Nos offres d’emploi</a></li>
            <li class="  text-white  bg-transparent"><a href=" " class="text-white
                ">Pub NIATA</a></li>
            <li class="  text-white  bg-transparent"><a href="" class="text-white
                ">Devenir annonceur pub</a></li>
            <li class=" text-white  bg-transparent"><a href="" class="text-white
                ">Devenir partenaire pro</a></li>  </ul>
        </div>
        </div>
          <div class="col-lg-2 col-12 col-md-4 mx-3">
            <div >
            <h5 class="text-white">Contacts</h5>
           <ul class="list-group list-group-flush text-white ">
            <li class="  text-white  bg-transparent fs-6 p-0 m-0"><a href="mailto:contact@niatagmail.com" class="text-white
                ">niata@niata.sn </a> </li>
            <li class="  text-white  bg-transparent">+221 77 277 00 00</li>
         </ul>
        </div>
      </div>
          <div class="col-lg-2 col-12 col-md-4 mx-3">
            <div >
            <h5 class="text-white">Suivez-nous</h5>
            <ul class="  text-white d-flex  flex-row justify-content-start p-0">
             <li class="  text-white  bg-transparent m-0 "><a href=""><img src="{{ asset('defaultimg/images/Facebook C 1.png') }}" class="w-100" alt=""></a> </li>
             <li class="  text-white  bg-transparent m-0"><a href=""><img src="{{ asset('defaultimg/images/Instagram C 1.png') }}" class="w-100" alt=""></a></li>
             <li class="  text-white  bg-transparent"><a href=""><img src="{{ asset('defaultimg/images/Twitter C 1.png') }}" class="w-100" alt=""></a></li><br>
             <li class="  text-white  bg-transparent"><a href=""><img src="{{ asset('defaultimg/images/Linkedin C 1.png') }}" class="w-100" alt=""></a></li>
            </ul>
        </div>
      </div>
          <div class="col-lg-2 col-12 col-md-4 mx-3">
            <div >
            <h5 class="text-white">Informations légales</h5>
           <ul class="list-group list-group-flush text-white ">
            <li class="    bg-transparent fs-6 p-0 m-0"><a href=" "class="text-white
            ">Conditions générales</a>  </li>
            <li class="    bg-transparent"><a href="" class="text-white
                ">Mentions légales</a></li>
            <li class="    bg-transparent"><a href="" class="text-white
                ">Informations sur le classement</a></li>
            <li class="    bg-transparent"><a href="" class="text-white
                ">Politique et confidentialité</a></li>
            <li class="   bg-transparent"><a href="" class="text-white
                ">Charte cookies</a></li>  </ul>
        </div>
      </div>
          <div class="col-lg-2 col-12 col-md-4 mx-3">
            <div >
            <h5 class="text-white">Télécharger l’application</h5>
            <ul class="list-group list-group-flush text-white ">
                <li class="  text-white  bg-transparent "><a href=""><img src="{{ asset('defaultimg/images/Disponible sur Google Play 1.png') }}" class="w-50 " alt=""></a> </li>
                <li class="  text-white  bg-transparent"><a href=""><img src="{{ asset('defaultimg/images/App store 1.png') }}" class="w-50" alt=""></a></li> </ul>
           </div>
    </div>
    </div>
    <hr class=" bg-light footer-line mt-5">
    <p class="text-center text-white">Copyright © 2023 DEFAR Sci. Tous droits réservés</p>
    </div>
    </body>
</html>
