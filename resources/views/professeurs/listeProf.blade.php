
@extends('layouts.navbar')

@section('content')
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
        <div class="float-right">
            <a href="{{route('FormulaireProfesseur')}}">Ajouter</a>
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
                        @forelse ($prof as $prof)
                        <tr class="alert" role="alert">
                            <th scope="row">{{$prof->IdProfesseur}}</th>
                            <td>{{$prof->NomProfesseur}}</td>
                            <td>{{$prof->PrenomProfesseur}}</td>
                            <td>{{$prof->EmailProfesseur}}</td>
                            <td>
<div class="actions">
<div>
    <a href="{{route('SupprimerProfesseur', $prof->IdProfesseur)}}" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><i class="fa fa-close"></i></span>
      </a>
</div>
<div style="">
    <a href="{{route('FormulaireEditionProf', $prof->IdProfesseur)}}" class="edit" data-toggle="modal" data-target="#exampleModal">
        <span aria-hidden="true"><i class="fa fa-pencil"></i></span>
      </a>
</div>

      {{-- MODAL --}}
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('FormulaireEditionProfesseur')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" >Save changes</button>
            </div>
            </div>
        </div>
        </div>
</div>
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

