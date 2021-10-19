@extends('layouts.navbar02')

@section('content')
    <title>Liste Professeur</title>
    </head>
    <body>
        <section>
            <link rel="stylesheet" href="{{ asset('css/table.css') }}">
                <!--for demo wrap-->
                <div class="table-head">
                    <h1>Liste des professeurs</h1>
                    <button class="btn btn-primary"><a href="{{route('FormulaireProfesseur')}}">Ajouter</a></button>

                </div>
                <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </table>
                </div>
                <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                    @forelse ($prof as $prof)
    <tr>
        <td>{{$prof->NomProfesseur}}</td>
        <td>{{$prof->PrenomProfesseur}}</td>
        <td>{{$prof->EmailProfesseur}}</td>
        <td>
            <a href="{{route('SupprimerProfesseur', $prof->IdProfesseur)}}">Supprimer</a>
            <a href="{{route('FormulaireEditionProf', $prof->IdProfesseur)}}">Editer</a>
        </td>
    @empty
        <h2>Rien à afficher</h2>

    </tr>
    @endforelse
                    </tbody>
                </table>
                </div>
            </section>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script>
                // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
            $(window).on("load resize ", function() {
            var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
            $('.tbl-header').css({'padding-right':scrollWidth});
            }).resize();
            </script>
@endsection
