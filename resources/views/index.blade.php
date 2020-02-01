@extends('masters.master')

@section('pageTitle','Formulari')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Biorritme</h1>
                
                <p>Benvingut: {{$nom}}</p>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="text-align:center;">
        <form action="/store" method="post">
        @csrf   
        <div class="row">
            <div class="col"></div><div class="col"></div>
            <div class="form-group col">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="col"></div><div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div><div class="col"></div>
            <div class="form-group col">
                <label for="birthdate">Data de neixement</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate">
            </div>
            <div class="col"></div><div class="col"></div>
        </div>
        <button type="submit" class="btn btn-success" style="text-align: center;">Submit</button>
        </form>
    </div>

@endsection