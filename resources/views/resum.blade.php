@extends('masters.master')

@section('pageTitle','Resum')

@section('header')

    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">Resultats d'en {{$nomUsuari}}</h1>
                <p>Nescut el {{$dataNeixement}}, portes viu un total de: {{$dies}} dies</p>
                <p>Això significa que els teus bioritmes estan en el següent estat:</p>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <div class="container-fluid">
        <div class="container">
            <h1 class="display-4">Físic, cicles de 23 díes.</h1>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: {{$progresFis}}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="container">
            <h1 class="display-4">Emotiu, cicles de 28 díes.</h1>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: {{$progresEmo}}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="container">
            <h1 class="display-4">Intelectual, cicles de 33 díes.</h1>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: {{$progresInt}}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

@endsection