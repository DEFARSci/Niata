<!DOCTYPE html>
<html lang="en">
  <script src="{{asset('assets/js/app.js')}}"></script>
<head>
    <title>Niata</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('assets/amsify/amsify.suggestags.css')}}">
    <script src="{{asset('assets/amsify/jquery.amsify.suggestags.js')}}"></script>

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

<div class="alert alert-dismissible alert-success">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Sucess !</strong> {{session('success')}}
  </div>

    @endif
    @if (session('error'))
    <div class="alert alert-dismissible alert-danger">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Error !</strong> {{session('error')}}
      </div>

    @endif
    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell text-black">id</th>
                                <th class="cell text-black">Date</th>
                                <th class="cell text-black">Prenom</th>
                                <th class="cell text-black">Nom</th>
                                {{-- <th class="cell text-black">Domaine</th> --}}
                                <th class="cell text-black">Message</th>
                                <th class="cell text-black">Image</th>
                                <th class="cell text-black">Etat</th>
                                <th class="cell text-black">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $temoignages as $temoignage)

                            <tr>
                                <td class="cell text-black">{{$temoignage->id}}</td>
                                <td class="cell text-black"><span>{{ date("d/m/Y", strtotime($temoignage->created_at)) }}</span><br><span>{{ date("H:i:s", strtotime($temoignage->created_at)) }}</span></td>
                                <td class="cell text-black">{{$temoignage->prenom}}</td>
                                <td class="cell text-black">{{$temoignage->nom}}</td>
                                {{-- <td class="cell text-black">{{$temoignage->domaine}}</td> --}}
                                <td class="cell text-black"><span class="truncate">{{Str::limit(htmlspecialchars_decode(strip_tags($temoignage->message)), 150)}}</span></td>
                                <td class="cell text-black"> <img src="{{asset('temoignage/'.$temoignage->image)}}"  style="height: 90px; width: 90px;" ></td>
                                <td class="cell text-black">
                                    <a class="btn app-btn{{ $temoignage->ispublished ? ' btn-success' : ' btn-danger' }} btn-sm" href="{{ route('temoignage.etat',$temoignage->id) }}">{{ $temoignage->ispublished ? 'Desactiver' : 'Activer' }}</a>
                                </td>
                                <td class="cell text-black">


                                    {{-- <a class="btn app-btn{{ $temoignage->ispublished ? 'danger':'secondary'}}">Push</a> --}}
                                    <a class="btn app-btn-secondary btn-sm" href="{{route('temoignage.show', $temoignage->id)}}">Show</a>
                                    <a class="btn app-btn-secondary btn-sm" href="{{route('temoignage.edit', $temoignage->id)}}">edit</a>

                                     <a type="submit" class="btn app-btn-secondary btn-sm" href="{{route('temoignage.delete', $temoignage->id)}}">delete</a>


                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

</body>

</html>
