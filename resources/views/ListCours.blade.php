<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


@extends('layouts.app')

@section('content')


 <button onclick="window.location='{{ url("AjoutCours") }}'" class="btn btn-primary pull-right">Ajouter un cours</button>

<div>
  @if(session()->get('success'))
      <div class="alert alert-success">
          {{ session()->get('success') }}
      </div>
  @endif
  @if(session()->get('danger'))
      <div class="alert alert-danger">
          {{ session()->get('danger') }}
      </div>
  @endif
</div>


@if (count($Cours) < 1)

<h1 align="center">Aucun Cours pour le moment</h1>

@else

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Description</th>
        <th>fichier</th>
        <th>Supprimer</th>
        <th>Modifier</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Cours as $value)
        <tr>
            <th scope="row">{{ $value->id }}</th>
            <td> {{ $value->nomCours }} </td>
            <td> {{ $value->descCours }} </td>
            <td> <img src="/storage/app/fichier/cours/{{$value->fichier}}" alt="{{$value->fichier}}"> </td>
            <td><form method="get" action="{{action('ListCours@supprimer',$value->id)}}">
              <button class="btn btn-secondary" onclick="return confirm('Vous etes sur de supprimer ce cours')" type="submit">Supprimer
              </button>
              </form></td>
            
              <td>
                <form method="get" action="{{action('ListCours@GestionCours',$value->id)}}">
                  <button type="submit" class="btn btn-secondary">Modifier</button>
                </form>
              </td> 
          </tr>
        @endforeach
    </tbody>
  </table>

@endif
@endsection
</html>
