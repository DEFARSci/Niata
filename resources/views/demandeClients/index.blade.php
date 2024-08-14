
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Liste des demandes</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="{{asset('assets/plugins/fontawesome/js/all.min.js')}}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/portal.css')}}">

</head>

<body class="app">
<!--//app-header-->
<header class="app-header fixed-top">
    @include('layout.header')
    @include('layout.sidebar')
</header>
@include('layout.content')



<div class="tab-content" id="orders-table-tab-content">
    @if (session('success'))
    <div class="alert alert-success alert-dismissable m-3 " id="success-alert">
        {{session('success')}}
    </div>

    @endif
    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left ">
                        <thead>
                            <tr>
                                <!-- <th class="cell text-black">id</th> -->
                                <th class="cell text-black">Date</th>
                                <th class="cell text-black">Prénom et Nom</th>
                                <th class="cell text-black">email</th>
                                <th class="cell text-black">Telephone</th>
                                <th class="cell text-black">Marque</th>
                                <th class="cell text-black">Modele</th>
                                <th class="cell text-black">Information supplémentaire</th>
                                <th class="cell text-black">option</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ( $demandeClients as $demande)

                            <tr>
                                 <!-- <td class="cell text-black">{{$demande->id}}</td> -->
                                <td class="cell text-black">{{$demande->created_at}}</td>
                                <td class="cell text-black">{{$demande->nom}}</td>
                               <td class="cell text-black">{{$demande->email}}</td>
                                 <td class="cell text-black">{{$demande->telephone}}</td>
                                 <td class="cell text-black">{{$demande->marque}}</td>
                                <td class="cell text-black">{{$demande->modele}}</td>
                               <td class="cell text-black">{{$demande->infoSupp}}</td>
                               <td>
                        <a class="btn app-btn-secondary btn-sm" href="{{ route('demandeClient.edit', $demande->id) }}">
                            <i class="fas fa-edit ml-1"></i>
                        </a>
                        <a class="btn app-btn-secondary btn-sm" href="{{ route('demandeClient.show', $demande->id) }}">
                            <i class="fas fa-eye ml-1"></i>
                        </a>
                        <!-- <a class="btn app-btn-secondary btn-sm" href="{{ route('demandeClient.destroy', $demande->id) }}">
                            <i class="fas fa-trash ml-1"></i>
                        </a> -->
                    </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div><!--//table-responsive-->

            </div><!--//app-card-body-->
        </div><!--//app-card-->
    </div>
    {{-- <div class="app-wrapper">
	    <!--//app-content-->

	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

		    </div>
	    </footer><!--//app-footer-->

    </div><!--//app-wrapper-->    					 --}}


    <!-- Javascript -->
    <script src="{{asset('assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Charts JS -->
    <script src="{{asset('assets/plugins/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('assets/js/index-charts.js')}}"></script>

    <!-- Page Specific JS -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script>
        // Attendre 5 secondes (5000 ms) puis masquer l'alerte
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 5000);
    </script>


</body>
</html>

