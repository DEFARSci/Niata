<!DOCTYPE html>
<html lang="en">
<head>
  <head>
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

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  </head>
    <title>Niata</title>
</head>

{{-- <div class="container-fluid sticky-top">
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <div class="container" style="background-color: rgb(217, 212, 217)">connexion</div>
</div>
<div class="col-md-1"></div>
</div>
</div> --}}
<div class="container-fluid sticky-top">
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">

{{--
<nav class=" navbar navbar-expand-lg navbar-light   " style="background-color: rgb(255, 255, 255)">
  <div class="container-fluid">
    <a class="navbar-brand mr-4" href="#">Niata</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link text-black rounded-5 m-3 {{request()->is('/') ? 'active bg-primary text-white' : ''}}"   href="/">Acceuil</a>
        <a class="nav-link  text-black  rounded-5 m-3 {{request()->is('') ? 'active bg-primary text-white' : ''}}"  href="#">Produit</a>
        <a class="nav-link  text-black rounded-5 m-3 {{request()->is('blog') ? 'active bg-primary text-white' : ''}}"  href="{{route('blog')}}">Actualite</a>
        <a class="nav-link  text-black rounded-5 m-3 {{request()->is('contact') ? 'active bg-primary text-white' : ''}}"  href="{{ route('contact') }}">Contact</a>
        <a class="nav-link  text-black rounded-5 m-3 {{request()->is('') ? 'active bg-primary text-white' : ''}}"  href="#">A propos</a>

      </div>
    </div>
  </div>
</nav> --}}

{{-- <nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  {{-- <a href="/" class="flex items-center"> --}}
      {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" /> --}}
      {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Niata</span>
  {{-- </a> --}}
  {{-- <div class="flex items-center md:order-2"> --}}
      {{-- <button type="button" data-dropdown-toggle="language-dropdown-menu" class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
        <svg class="w-5 h-5 mr-2 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900"><path fill="#b22234" d="M0 0h7410v3900H0z"/><path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff" stroke-width="300"/><path fill="#3c3b6e" d="M0 0h2964v2100H0z"/><g fill="#fff"><g id="d"><g id="c"><g id="e"><g id="b"><path id="a" d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z"/><use xlink:href="#a" y="420"/><use xlink:href="#a" y="840"/><use xlink:href="#a" y="1260"/></g><use xlink:href="#a" y="1680"/></g><use xlink:href="#b" x="247" y="210"/></g><use xlink:href="#c" x="494"/></g><use xlink:href="#d" x="988"/><use xlink:href="#c" x="1976"/><use xlink:href="#e" x="2470"/></g></svg>
        English (US)
      </button> --}}
      <!-- Dropdown -->
      {{-- <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700" id="language-dropdown-menu">
        <ul class="py-2 font-medium" role="none">
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
              <div class="inline-flex items-center">
                <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512"><g fill-rule="evenodd"><g stroke-width="1pt"><path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/><path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/></g><path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/><path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"/></g></svg>
                English (US)
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
              <div class="inline-flex items-center">
                <svg class="h-3.5 w-3.5 rounded-full mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512"><path fill="#ffce00" d="M0 341.3h512V512H0z"/><path d="M0 0h512v170.7H0z"/><path fill="#d00" d="M0 170.7h512v170.6H0z"/></svg>
                Deutsch
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
              <div class="inline-flex items-center">
                <svg class="h-3.5 w-3.5 rounded-full mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512"><g fill-rule="evenodd" stroke-width="1pt"><path fill="#fff" d="M0 0h512v512H0z"/><path fill="#009246" d="M0 0h170.7v512H0z"/><path fill="#ce2b37" d="M341.3 0H512v512H341.3z"/></g></svg>
                Italiano
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
              <div class="inline-flex items-center">
                <svg class="h-3.5 w-3.5 rounded-full mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512"><defs><path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"/></defs><path fill="#de2910" d="M0 0h512v512H0z"/><use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a"/><use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a"/></svg>
                中文 (繁體)
              </div>
            </a>
          </li>
        </ul>
      </div> --}}
      {{-- <button data-collapse-toggle="navbar-language" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-language" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-language">
        <a class="nav-link p-1 text-black rounded-5 m-3 {{request()->is('/') ? 'active bg-primary text-white' : ''}}"   href="/">Acceuil</a>
        <a class="nav-link p-1 text-black  rounded-5 m-3 {{request()->is('voiture/index') ? 'active bg-primary text-white' : ''}}"  href="{{ route('voiture.index') }}" hidden>Produit</a>
        <a class="nav-link p-1 text-black rounded-5 m-3 {{request()->is('index') ? 'active bg-primary text-white' : ''}}"  href="{{route('blog')}}">Actualite</a>
        <a class="nav-link p-1 text-black rounded-5 m-3 {{request()->is('contact') ? 'active bg-primary text-white' : ''}}"  href="{{ route('contact') }}">Contact</a>
        <a class="nav-link p-1 text-black rounded-5 m-3 {{request()->is('') ? 'active bg-primary text-white' : ''}}"  href="#">A propos</a>

  </div>
  </div> --}}
</nav>

<nav class="navbar navbar-expand-lg  nav-principal mx-auto bg-danger container">
    <div class="container">
      <a class="navbar-brand text-lg-center" href="#">NIATA<span class="d-none d-lg-inline">  |</span></a>
      <button class="navbar-toggler m" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center bg-danger " id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle color-link" href="#" id="navbarScrollingDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Produits
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
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

            </ul>
          </li>
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Actualités
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
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
            </ul>
          </li>   <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Guide
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
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
            </ul>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <span class="fa fa-search form-control-feedback p-3"></span>
        </form>
      </div>
    </div>
  </nav>

</div>
<div class="col-md-1"></div>
</div>
</div>


    <body class="d-flex flex-column min-vh-100 bg-slate-90">
     <div class="container-fluid mb-5">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 ">
          @yield('content')
        </div>
        <div class="col-md-1"></div>

      </div>


     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <footer class=" text-white"  >
        <div class="container-fluid"  >
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10" style="background-color: rgb(43, 41, 41);height: 10cm;">
              <div class="container py-3 mt-4" >
                <div class="row">
                  <div class="col-md-6 mt-5">
                    <h3>Contacter nous</h3>
                    <p>Email: contact@niata.com</p>
                    <p>Phone: +221 77 277 00 00</p>
                  </div>
                  <div class="col-md-6 mt-5">
                    <h3>Nous suivre</h3>
                    <ul class="list-inline">
                      <li class="list-inline-item"><a class="text-white" href="#"> Facebook</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#">Twitter</a></li>
                      <li class="list-inline-item"><a class="text-white"  href="#">Instagram</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              {{-- <div class="container-fluid text-center py-2" style="background-color: rgb(43, 41, 41)">
                <p class="mb-0 text-white">© 2023 Niata. All rights reserved.</p>
              </div> --}}
          </div>
          <div class="col-md-1"></div>
        </div>
    </footer>

</body>



</html>
