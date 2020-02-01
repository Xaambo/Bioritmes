@extends('masters.master')

@section('pageTitle','Resum')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Resultats</h1>
                <p>Portes viu un total de: {{$dies}}</p>
                <p>Això significa que els teus bioritmes estan en el següent estat:</p>
                
            </div>
        </div>
    </div>

@endsection