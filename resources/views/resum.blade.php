@extends('masters.master')

@section('pageTitle','Resum')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Biorritme</h1>
                <p>Portes viu un total de: {{$dies}}</p>
            </div>
        </div>
    </div>

@endsection