@extends('layout.app')

@section('content')

  <section class="decouvrir-nos-voiture mt-5 pt-4  ">
    <div class="container card-search-container mt-5">
      <div class="row justify-content-center m-0 p-0 ">

          <div class="col-md-12 col-12 col-lg-6 col-sm-12 card-search ">
            @if (session('success'))
                <div class="alert alert-success alert-dismissable m-3">
                    {{session('success')}}
                </div>
                @elseif (session('error'))
                {{-- <div class="alert alert-danger alert-dismissable m-3">
                    {{session('error')}}
                </div> --}}
                <div class="alert alert-dismissible alert-danger m-3">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Oh snap!</strong> <a href="#" class="alert-link">{{session('error')}}</a> et essayez de soumettre à nouveau.
                  </div>
                  @elseif (session('warning'))

                  <div class="alert alert-dismissible alert-warning m-3">
                      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                      <strong>Oh snap!</strong> <a href="#" class="alert-link">{{session('warning')}}</a>
                    </div>
            @endif
              <legend class="mb-4">&#139;SIMPLE,RAPIDE ET GRATUIT&#155;</legend>
              <form action="{{ route('evaluation.voiture') }}" method="POST" id="myForm">
                {{-- <form action="" method="" id="myForm"> --}}
                @csrf
                  {{-- <div class="form-group">
                      <label for="exampleSelect1">Email :</label>
                      <input type="email" class="form-control" id="inputMail" name="email" placeholder="Email">
                      @error('email')
                      <div class="text-danger" role="alert">
                        {{ $message }}
                      </div>
                      @enderror
                  </div> --}}
                  <div class="form-group">
                      <label for="exampleSelect2">Marque :</label>
                      {{-- <input type="text" class="form-control" id="inputMarque" name="marque" placeholder="Marque"> --}}
                      <select id="inputMarque" class="form-control rounded-5" name="marque">
                       <option value="" >Toutes les marques</option>

                       @foreach ( $marques as $marque )

                       <option value="{{ $marque->marque}}">{{ $marque->marque}}</option>

                       @endforeach

                      </select>

                      @error('marque')
                      <div class="text-danger" role="alert">
                        {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="exampleSelect3">Modèle :</label>
                     {{--  <input type="text" class="form-control" id="inputModele" name="model" placeholder="Model"> --}}
                      <select id="inputModele" class="form-control rounded-5" name="model"  >
                        {{-- Options seront ajoutées dynamiquement ici --}}

                    </select>
                      @error('model')
                      <div class="text-danger" role="alert">
                        {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label for="exampleSelect4">Année :</label>
                      {{-- <input type="number" class="form-control rounded-5" name="annee" id="inputAnnee" placeholder="Année"> --}}
                      <select id="inputAnnee" class="form-control rounded-5" name="annee" >
                        {{-- Options seront ajoutées dynamiquement ici --}}

                    </select>
                      @error('annee')
                      <div class="text-danger" role="alert">
                {{ $message }}
              </div>
              @enderror
                  </div>
                  <div class="form-group">
                      <label for="exampleSelect5">Boite Vitesse :</label>
                      <select name="boite" class="form-control rounded-5" id="inputBoite">
                        <option value="manuelle">Manuelle</option>
                        <option value="automatique">Automatique</option>
                          <!-- Ajoutez autant d'options que nécessaire -->
                      </select>
                  </div>
                   <div class="form-group">
                      <label for="exampleSelect5">Type de Carburant :</label>
                      <select name="carburant" class="form-control rounded-5" id="inputCarburant" >
                          <option value="Essence">Essence</option>
                          <option value="diesel">Diesel</option>
                          {{-- <option value="hybride">Hybride</option>
                          <option value="electrique">Electrique</option> --}}

                          <!-- Ajoutez autant d'options que nécessaire -->
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleSelect"">Kilométrage :</label>
                    <input name="kilometre" type="number" class="form-control rounded-5" id="inputKilometre"  placeholder="Kilométrage">
                    @error('kilometre')
                    <div class="text-danger" role="alert">
                      {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn text-white valider-search-card mx-auto w-50">Valider</button>
                {{-- <button type="button" class="btn text-white valider-search-card mx-auto w-50 rounded-5" id="btn" >Valider</button> --}}
<div>
  <h1 id="test"></h1>
</div>
              </form>
          </div>
          {{-- Modal --}}

          {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> --}}
            {{-- <div class="modal" id="responseModal" tabindex="-1" aria-labelledby="responseModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-center id="staticBackdropLabel">Prix estimatif de votre voiture</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1 class="text-center" id="modalPrix"></h1>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item" id="modalMarque"></li>
                    <li class="list-group-item" id="modalModele"></li>
                    <li class="list-group-item" id="modalAnnee"></li>
                    <li class="list-group-item" id="modalBoite"></li>
                    <li class="list-group-item" id="modalCarburant"></li>
                    <li class="list-group-item" id="modalKilometre"></li>
                  </ul>
                </div>
                <div class="modal-footer">


                </div>
              </div>
            </div>

        </div> --}}

        <div id="myModal" class="modal rounded-5 border-black">
            <div class="modal-content">
              <span class="close">&times;</span>
              <div id="modalContent"></div>
            </div>
          </div>
        <!-- Loading Modal -->
<div id="loadingModal">
    <div id="loadingSpinner"></div>
</div>
          {{-- Modal --}}
          <div class="col-md-6 col-lg-6 my-4 d-none d-lg-block  ">


                    <div class="d-flex ">
                        <legend class="mt-5 fs-2 ">
                          <strong style="font-family: Lugrasimo, cursive;">
                          Découvrez gratuitement la valeur de votre véhicule
                          </strong>
                        </legend>
                      </div>
                    <img src="{{ asset('defaultimg/images/Voitures 1.png') }}" class="  col-12 " alt="...">

                      {{-- <img src="{{ asset('defaultimg/images/Voitures 1.png') }}" class=" car-hero-img col-12" alt="..."> --}}
                  </div>

      </div>
  </div>
</section>

<section class="notre-cote-auto">
    <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-6 col-sm-12">
              <img src="{{ asset('defaultimg/images/Plan de travail 2 1.png') }}" class="img-fluid car-hero" alt="...">
          </div>
          <div class="col-lg-6  bg-transparent col-sm-12">
              <h5 class="card-title car-hero-title text-white fs-5">Niata: la premiére Cote Sénégalaise pour véhicules d'Occasion</h5>
              <ul class="list-group list-group-flush text-white ">
                  <li class=" border-0   text-white  bg-transparent">Une estimation gratuite et instantané   </li>
                  <li class=" border-0   text-white  bg-transparent">Plusieurs milliers de données exploités</li>
                  <li class=" border-0  text-white  bg-transparent">Mise à jour réguliére selon les évolutions du marché</li>
                  <li class=" border-0  text-white  bg-transparent">Calculée grâce au modèle statistique de nos ingénieurs</li>
                  <li class=" border-0  text-white  bg-transparent">Utilisation de l'intelligence artificielle</li>
                </ul>
          </div>

        </div>
    </div>
  </section>

  <div id="carouselExampleIndicatorsmodel1 " class="carousel slide  modele1" data-bs-ride="carousel">

    <div class="carousel-inner ">
      <div class="carousel-item active">
        <div class="d-flex " style="background-color: rgb(33, 32, 32)">
            <div  class="imgCarousel" id="logo">
                <img src="{{ asset('defaultimg/images/logo/Logo BMW.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel" id="logo">
                <img src="{{ asset('defaultimg/images/logo/Logo Ford.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel" id="logo">

                <img src="{{ asset('defaultimg/images/logo/Logo Hyundai.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel">
                <img src="{{ asset('defaultimg/images/logo/Logo Jeep.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel">
                <img src="{{ asset('defaultimg/images/logo/Logo Mercedes Benz.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel">
                <img src="{{ asset('defaultimg/images/logo/Logo Toyota.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel">
                <img src="{{ asset('defaultimg/images/logo/Logo BMW.png') }}" class="img-fluid logo-car " alt="...">
            </div>
      </div>
      </div>
      <div class="carousel-item ">
        <div class="d-flex " style="background-color: rgb(33, 32, 32)">
            <div class="imgCarousel" id="logo">
                <img src="{{ asset('defaultimg/images/logo/Logo BMW.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel" id="logo">
                <img src="{{ asset('defaultimg/images/logo/Logo Ford.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel" id="logo">

                <img src="{{ asset('defaultimg/images/logo/Logo Hyundai.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel">
                <img src="{{ asset('defaultimg/images/logo/Logo Jeep.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel">
                <img src="{{ asset('defaultimg/images/logo/Logo Toyota.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel">
                 <img src="{{ asset('defaultimg/images/logo/Logo Nissan.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel">

                <img src="{{ asset('defaultimg/images/logo/Logo Range rover .png') }}" class="img-fluid logo-car " alt="...">
            </div>
      </div>
      </div>
      <div class="carousel-item ">
        <div class="d-flex " style="background-color: rgb(33, 32, 32)">
            <div class="imgCarousel" id="logo">
                <img src="{{ asset('defaultimg/images/logo/Logo Nissan.png') }}" class="img-fluid logo-car  " alt="...">
            </div>
            <div  class="imgCarousel" id="logo">
               <img src="{{ asset('defaultimg/images/logo/Logo Peugeot.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel" id="logo">

         <img src="{{ asset('defaultimg/images/logo/Logo Range rover .png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel">
                <img src="{{ asset('defaultimg/images/logo/Logo Toyota.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel">
                <img src="{{ asset('defaultimg/images/logo/Logo Jeep.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div  class="imgCarousel">
                <img src="{{ asset('defaultimg/images/logo/Logo Volkswagen.png') }}" class="img-fluid logo-car " alt="...">
            </div>
            <div class="imgCarousel">
                <img src="{{ asset('defaultimg/images/logo/Logo Mercedes Benz.png') }}" class="img-fluid logo-car " alt="...">
            </div>
      </div>
      </div>


    </div>

  </div>
  {{-- modal --}}
  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
      <div class="modal-content col-12 bg-black border-0 text-white">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Donnez vos avis</h1>
          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid ">
                <div class="row">

                    <div class="col-md-12 text-black">
                        <form action="{{route('temoignage.store')}}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group col-12">
                                <label for="titre" class="text-white">prenom</label>
                                <input type="text" class="form-control text-black" id="titre" name="prenom" value="{{old('prenom')}}">
                                @error('prenom')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="form-group col-12">
                                <label for="titre" class="text-white">nom</label>
                                <input type="text" class="form-control text-black" id="titre" name="nom" value="{{old('nom')}}">
                                @error('nom')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="form-group col-12">
                                <label for="titre" class="text-white">Domaine</label>
                                <input type="text" class="form-control text-black" id="titre" name="domaine" value="{{old('domaine')}}">
                                @error('domaine')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="form-group col-12">
                                <label for="titre" class="text-white">message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" cols="10">{{ old('message') }}</textarea>
                                @error('message')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="form-group col-12">
                                <label for="titre">photo</label>
                                <input type="file" class="form-control text-black" id="titre" name="image" value="{{old('photo')}}" >
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                              </div>



                            <button type="submit " class="btn text-white bg-black mt-3">Ajouter</button>
                          </form>
                    </div>
                </div>
            </div>

        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div> --}}
      </div>
    </div>
  </div>
  {{-- modal --}}
  <div class="d-grid gap-2  mx-auto  w-sm-100 m-4 justify-content-center ">
    <a class="btn btn-primary  rounded-pill bg-light text-black m-t-5 " role="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Donnez vos avis</a>

  </div>

  {{-- vos Avsi --}}
  <section class="vos-avis">
    <div class="container ">
      <h5 class="text-white text-center m-5 text-uppercase fs-2">VOS AVIS NOUS IMPORTENT</h5>


                {{-- @include('avis') --}}
      <iframe src="{{ url('/avis') }}"  style="width: 100%; height: 400px;   overflow: unset;"></iframe>



      </div>


  </section>
{{-- vos avis --}}

  {{-- vos Avsi --}}

  {{-- FAQ --}}
  <section>

    <div class="container faq">
    <div class="card-body card-faq">
      <h5 class="card-title text-white text-center m-5">FAQ</h5>

      <p >
        <p class="form-select form-select-lg mb-3 " data-bs-toggle="collapse" href="#niata" role="button" aria-expanded="false" aria-controls="collapseExample">
          Qu’est-ce que NIATA ?
        </p>
      </p>
        <div class="collapse" id="niata">
          <div class="card card-body bg-black text-white">
            NIATA est une plateforme en ligne dédiée à l'estimation de la cote des voitures sur le marché sénégalais. Notre service permet aux utilisateurs d'obtenir des estimations précises de la valeur de leur véhicule basées sur des données de marché actuelles. Cela aide les vendeurs et les acheteurs à
            établir des prix justes et à prendre des décisions éclairées lors de la vente ou de l'achat d'un véhicule.
          </div>
        </div>
        <p >
          <p class="form-select form-select-lg mb-3" data-bs-toggle="collapse" href="#nouvelle-voiture" role="button" aria-expanded="false" aria-controls="collapseExample">
            Pourquoi utiliser NIATA pour acheter sa nouvelle voiture ?
          </p>
        </p>
          <div class="collapse" id="nouvelle-voiture">
            <div class="card card-body bg-black text-white">
              Utiliser NIATA pour acheter votre nouvelle voiture vous assure de payer un prix équitable basé sur le marché actuel sénégalais. Notre système d'évaluation fournit des informations transparentes et à jour sur les cotes des voitures, vous aidant ainsi à négocier de manière informée et à éviter les prix excessifs. De plus,
              nous pouvons vous fournir notre réseau de partenaires qui vous garantit un choix varié de véhicules de qualité.
            </div>
          </div>
          <p >
            <p class="form-select form-select-lg mb-3" data-bs-toggle="collapse" href="#type-voiture" role="button" aria-expanded="false" aria-controls="collapseExample">
              Quels types de voitures puis-je trouver sur NIATA ?
            </p>
          </p>
            <div class="collapse" id="type-voiture">
              <div class="card card-body bg-black text-white">
                Sur NIATA, vous pouvez trouver une large gamme de véhicules d'occasion, allant des berlines au SUVs,.
                </div>
            </div>
            <p >
              <p class="form-select form-select-lg mb-3" data-bs-toggle="collapse" href="#concessionnaires" role="button" aria-expanded="false" aria-controls="collapseExample">
                Avec quels concessionnaires travaillez-vous ?
              </p>
            </p>
              <div class="collapse" id="concessionnaires">
                <div class="card card-body bg-black text-white">
                  Nous travaillons avec un réseau de concessionnaires réputés à travers le Sénégal. Ces partenariats sont
                  établis après une évaluation rigoureuse de leur fiabilité, de la qualité de leurs véhicules et de leur
                  service client. Cette collaboration nous permet d'assurer que
                  les estimations de cote fournies sur notre site sont basées sur une large sélection de véhicules de qualité
                </div>
              </div>
              <p >
                <p class="form-select form-select-lg mb-3" data-bs-toggle="collapse" href="#modèlepersonnalisé" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Est-il possible de demander un modèle personnalisé par l’intermédiaire de NIATA ?
                </p>
              </p>
                <div class="collapse" id="modèlepersonnalisé">
                  <div class="card card-body bg-black text-white">
                    Bien que NIATA soit principalement une plateforme d'estimation de cote, nous pouvons assister
                    les clients dans la recherche de modèles personnalisés grâce à notre réseau de concessionnaires
                    partenaires. Si vous avez des besoins spécifiques ou cherchez une configuration particulière, nous pouvons
                    vous aider à trouver le véhicule qui répond à vos attentes. N'hésitez pas à nous contacter pour discuter de vos besoins spécifiques.
                  </div>
                </div>
                <p >
                  <p class="form-select form-select-lg mb-3" data-bs-toggle="collapse" href="#questions" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Avez-vous d’autres questions ?
                  </p>
                </p>
                  <div class="collapse" id="questions">
                    <div class="card card-body bg-black text-white">
                      Nous serons ravis de vous répondre à niata@niata.sn.
                    </div>
                  </div>
      </p>
    </div>
    </div>
  </section>

  {{-- FAQ --}}

     {{-- newletter--}}
      <div class="bg-light w-100">
      <div class="container bg-light container-newsletter ">
        <div class="row   p-5">
            <div class="col-lg-6 col-sm-12  bg-transparent ">
                <h5 class="card-title car-hero-title text-black ">Abonnez-vous maintenant à notre newsletter</h5>
              <p class=" text-black">Obtenez des conseils exclusifs d'experts sur les voitures</p>
              <form class="d-flex flex-row">
                    <div class="col-auto w-50 email-newsletter ">
                      <label for="inputPassword2" class="visually-hidden">Password</label>
                      <input type="email" class="form-control rounded-pill  " id="inputPassword2" placeholder="Votre adresse mail">
                    </div>
                    <div class="col-auto inscrir-newsletter">
                      <button type="submit" class="btn btn-primary mb-3 rounded-pill">S’inscrire</button>
                    </div>
                </form>
                  <p class="">Lors de l'inscription, vous acceptez les <a href="">conditions générales</a> ainsi que la <a href="">déclardéclaration de confidentialité</a>.</p>

            </div>
            <div class="col-lg-6 col-sm-12 ">
                <img src="{{ asset('defaultimg/images/Plan de travail 32 1.png') }}" class="img-fluid car-hero" alt="...">
            </div>


          </div>
      </div>
   </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/formulaire.js') }}"</script>
// <script src="{{ asset('js/evaluation.js') }}"</script>
  <script>



   let btn = document.getElementById("btn");
    var openModalBtn = document.getElementById('openModalBtn');
  var modal = document.getElementById('myModal');
  var modalContent = document.getElementById('modalContent');
  var closeModal = document.getElementsByClassName('close')[0];
  var loadingModal = document.getElementById('loadingModal');

btn.addEventListener("click", function (e) {
e.preventDefault();
   // console.log(btn);
    loadingModal.style.display = 'block';
    // modal.style.display = 'block';

    // let inputmail = document.getElementById("inputMail").value;
    let inputmarque = document.getElementById("inputMarque").value;
    let inputmodele = document.getElementById("inputModele").value;
    let inputboite = document.getElementById("inputBoite").value;
    let inputcarburant = document.getElementById("inputCarburant").value;
    let inputannee = document.getElementById("inputAnnee").value;
    let inputkilometrage = document.getElementById("inputKilometre").value;
    let marque=document.getElementById("modalmarque");
    let model=document.getElementById("modalmodele");
    let boite=document.getElementById("modalboite");
    let carburant=document.getElementById("modalcarburant");
    let annee=document.getElementById("modalannee");

    axios.post('/evaluation/voiture', {
        marque: inputmarque,
        model: inputmodele,
        annee: inputannee,
        kilometre: inputkilometrage,
        carburant: inputcarburant,
        boite: inputboite,
        // email: inputmail,
    })
    .then(response => {
         console.log(response);
        let rs=response.data;
          console.log(rs.success);
          if(rs.success==false ||rs.data.prix==null) {
            modalContent.innerHTML = `<div class="alert alert-danger" role="alert">le type de voiture n'est pas encore disponible dans la base de donnée</div>`;
          }else{


          let prix=rs.data.prix;
          let marque=rs.data.marque;
          let modele=rs.data.modele;
          let boite=rs.data.boite;
          let carburant=rs.data.carburant;
          let annee=rs.data.annee;

          modalContent.innerHTML = `

        <span class="text-center" id="responseModalLabel">Prix estimatif de votre voiture est: <strong>${prix} Fr</strong> </span>
            <div >
                <span class="text-bold" id="modalMarque">Marque: <strong>${marque}</strong></span>
            </div>
            <div>
                <span  id="modalModele">Modele: <strong>${modele}</strong></span>
            </div>
            <div>
                <span id="modalAnnee">Année: <strong>${annee}</strong></span>
            </div>
            <div>
                <span  id="modalBoite">Boite: <strong>${boite}</strong></span>
            </div>
            <div>
                <span  id="modalCarburant">Carburant: <strong>${carburant}</strong></span>
            </div>
            <div>
                <span  id="modalKilometre">Kilometrage: <strong>${inputkilometrage}</strong></span>
            </div>

        `
    }

        // Afficher le modal
        modal.style.display = 'block';
        loadingModal.style.display = 'none';
        // console.log(prix);
    })
    .catch(error => {
        modalContent.innerHTML = `<div class="alert alert-danger" role="alert">
            'Une erreur est survenue : <strong>Les données ne sont pas valides </strong>;</div>`
        // Afficher le modal
        modal.style.display = 'block';
        loadingModal.style.display = 'none';

        console.error('Erreur lors de l\'envoi des données :', error);
    });

});
 closeModal.addEventListener('click', function () {
    // Fermer le modal
    modal.style.display = 'none';
  });
//   $(document).ready(function () {
//         $('#inputMarque').on('input', function () {
//             var brand = $(this).val();
//             console.log(brand);
//             if (brand !== '') {
//                 $.ajax({
//                     url: '/getModels/' + brand,
//                     type: 'GET',
//                     success: function (data) {
//                         $('#inputModele').empty().prop('disabled', false);
//                         $.each(data, function (index, model) {
//                             $('#inputModele').append('<option value="' + model + '">' + model + '</option>');
//                         });
//                     },
//                     error: function () {
//                         console.log('Erreur lors de la récupération des modèles');
//                     }
//                 });
//             } else {
//                 $('#model').empty().prop('disabled', true);
//             }
//         });
//     });
</script>


@endsection
