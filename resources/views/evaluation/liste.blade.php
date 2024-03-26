
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Liste voiture</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell text-black">modele</th>
                                <th class="cell text-black">marque</th>
                                <th class="cell text-black">boite</th>
                                <th class="cell text-black">moteur</th>
                                <th class="cell text-black">annee</th>
                                <th class="cell text-black">kilometrage</th>
                                <th class="cell text-black">prix</th>
                                <th class="cell text-black">estimationKm</th>
                                <th class="cell text-black">estimationTransmission</th>
                                <th class="cell text-black">estimationCarburant</th>
                                <th class="cell text-black">option</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ( $voiture as $v)

                            <tr>
                                 <td class="cell text-black">{{$v->marque}}</td>
                                <td class="cell text-black">{{$v->modele}}</td>
                                <td class="cell text-black">{{$v->boite}}</td>
                                <td class="cell text-black">{{$v->type_carburant}}</td>
                                <td class="cell text-black">{{$v->annee}}</td>
                                <td class="cell text-black">{{$v->kilometrage}}</td>
                                <td class="cell text-black">{{$v->prix}}</td>
                                <td class="cell text-black">{{$v->estimationKm}}</td>
                                <td class="cell text-black">{{$v->estimationTransmission}}</td>
                                <td class="cell text-black">{{$v->estimationCarburant}}</td>


                                <td class="cell">
                                    <a class="btn app-btn-secondary" href="{{route('evaluation.edit', $v->id)}}"> <i class="fas fa-edit ml-1"></i></a>
                                     <form  class="d-inline" action="{{route('evaluation.destroy', $v->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn app-btn-secondary" href=""> <i class="fas fa-trash ml-1"></i> </button>

                                    </form>

                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div><!--//table-responsive-->

            </div><!--//app-card-body-->
        </div><!--//app-card-->
        <div class="pagination-container">
            {{ $voiture->links() }}

        </div>
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

<style>
    .pagination-container {
    margin-top: 20px;
}

.pagination-container .pagination {
    display: flex;
    list-style: none;
    padding: 0;
}

.pagination-container .pagination li {
    margin-right: 10px;
}

.pagination-container .pagination li a {
    padding: 5px 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    text-decoration: none;
}

.pagination-container .pagination li a:hover {
    background-color: #f0f0f0;
}
</style>
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

