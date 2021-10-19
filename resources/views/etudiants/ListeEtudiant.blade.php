
@extends('layouts.navbar')

@section('content')
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link href='{{asset('fonts/css.css')}}' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">

<link rel="stylesheet" href="{{asset('css/table/style.css')}}">

</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Liste des professeurs</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th>ID no.</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($etudiant as $etudiant)
                        <tr class="alert" role="alert">
                            <th scope="row">{{$etudiant->IdEtudiant}}</th>
                            <td>{{$etudiant->NomEtudiant}}</td>
                            <td>{{$etudiant->PrenomEtudiant}}</td>
                            <td>{{$etudiant->EmailEtudiant}}</td>
                            <td>
                                <a href="{{route('SupprimerEtudiant', $etudiant->IdEtudiant)}}" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true"><i class="fa fa-close"></i></span>
                            </a>
                          </td>
                          </tr>
                        @empty
                          <h2>Rien à afficher</h2>
                        @endforelse

                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('js/table/jquery.min.js')}}"></script>
<script src="{{asset('js/table/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/table/main.js')}}"></script>
@endsection

