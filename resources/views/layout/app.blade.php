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
    <nav class="navbar-expand-lg navbar fixed-top navbar-light bg-light  w-75 mx-auto">
        <div class="container">
          <a class="navbar-brand text-lg-center" href="#">NIATA             <span class="d-none d-lg-inline">  |</span></a>
          <button class="navbar-toggler m" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link text-black "   href="/">Accueil</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link color-link" href="{{ route('voiture.index') }}" >
                    Produits
                </a> --}}
                {{-- <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#">BMW</a></li>
                  <li><hr class="dropdown-divider m-2"></li>
                  <li><a class="dropdown-item " href="#">Chevrolet</a></li>
                  <li><hr class="dropdown-divider m-2"></li>
                  <li><a class="dropdown-item" href="#">Fiat</a></li>
                  <li><hr class="dropdown-divider m-2"></li>
                  <li><a class="dropdown-item" href="#">Ford</a></li>
                  <li><hr class="dropdown-divider m-2"></li>
                  <li><a class="dropdown-item" href="#">Hyundai</a></li>
                  <li><hr class="dropdown-divider m-2"></li>
                  <li><a class="dropdown-item" href="#">Jeep</a></li>
                  <li><hr class="dropdown-divider m-2"></li>
                  <li><a class="dropdown-item" href="#">Jeep</a></li>
                  <li><hr class="dropdown-divider m-2"></li>
                  <li><a class="dropdown-item" href="#">Toutes les marques et modèles</a></li>

                </ul> --}}
              {{-- </li> --}}
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="#">Fiches Techniques</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item " href="#">Cote auto</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item" href="#">Crédit</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item" href="#">Occasion</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item" href="#">Remise</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item" href="#">Catalogue</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item" href="#">Essai</a></li>

                </ul>
              </li>
              <li class="nav-item ">
                <a class="nav-link "  href="{{route('blog')}}" >
                    Actualités
                </a>
                {{-- <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="#">Nouveaux modèles</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item " href="#">Buzz</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item" href="#">Articles populaires</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item" href="#">Technologies</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item" href="#">Véhicules autonomes</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item" href="#">Concessionnaires</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item" href="#">Hybride</a></li>
                </ul> --}}
              </li>   <li class="nav-item ">
                <a class="nav-link " href="{{ route('contact') }} " >
                    Contact
                </a>
                {{-- <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <li><a class="dropdown-item" href="#">Lancer le comparateur</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item " href="#">Conseils</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item" href="#">Critiques</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item" href="#">Classement</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item" href="#">Offres</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item" href="#">Assurance auto</a></li>
                    <li><hr class="dropdown-divider m-2"></li>
                    <li><a class="dropdown-item" href="#">Location</a></li>
                </ul> --}}
              </li>

            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <span class="fa fa-search form-control-feedback p-3"></span>
            </form>
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
          <div class="col-md-2 mx-3 "> <div >
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
        </div></div>
          <div class="col-md-2 mx-3"> <div >
            <h5 class="text-white">Contacts</h5>
           <ul class="list-group list-group-flush text-white ">
            <li class="  text-white  bg-transparent fs-6 p-0 m-0"><a href="mailto:contact@niatagmail.com" class="text-white
                ">contact@niatagmail.com </a> </li>
            <li class="  text-white  bg-transparent">+221 77 277 00 00</li>
         </ul>
        </div></div>
          <div class="col-md-2 mx-3"> <div >
            <h5 class="text-white">Suivez-nous</h5>
            <ul class="  text-white d-flex  flex-row justify-content-start p-0">
             <li class="  text-white  bg-transparent m-0 "><a href=""><img src="../images/Facebook C 1.png" class="w-100" alt=""></a> </li>
             <li class="  text-white  bg-transparent m-0"><a href=""><img src="../images/Instagram C 1.png" class="w-100" alt=""></a></li>
             <li class="  text-white  bg-transparent"><a href=""><img src="../images/Twitter C 1.png" class="w-100" alt=""></a></li><br>
             <li class="  text-white  bg-transparent"><a href=""><img src="../images/Linkedin C 1.png" class="w-100" alt=""></a></li>
            </ul>
        </div></div>
          <div class="col-md-2 mx-3"> <div >
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
        </div></div>
          <div class="col-md-2 mx-3"> <div >
            <h5 class="text-white">Télécharger l’application</h5>
            <ul class="list-group list-group-flush text-white ">
                <li class="  text-white  bg-transparent "><a href=""><img src="../images/Disponible sur Google Play 1.png" class="w-50 " alt=""></a> </li>
                <li class="  text-white  bg-transparent"><a href=""><img src="../images/App store 1.png" class="w-50" alt=""></a></li> </ul>
        </div></div>
    </div>
    <hr class=" bg-light footer-line mt-5">
    <p class="text-center text-white">Copyright © 2023 DEFAR Sci. Tous droits réservés</p>
    </div>
    </body>
</html>
