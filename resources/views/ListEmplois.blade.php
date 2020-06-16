<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


@extends('layouts.app')

@section('content')


 <button onclick="window.location='{{ url("AjoutEmploi") }}'" class="btn btn-primary pull-right">Ajouter un emploi</button>

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


@if (count( $Emploi ) < 1)

<h1 align="center">Aucun Emplois pour le moment</h1>

@else

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Id Formation</th>
        <th>Classe</th>
        <th>emploi</th>
        <th>Supprimer</th>
        <th>Modifier</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Emploi as $value)
        <tr>
            <th scope="row">{{ $value->id }}</th>
            <td> {{ $value->idFormation }} </td>
            <td> {{ $value->classe }} </td>
            <td> <img src="/storage/app/fichier/emplois/{{$value->emploi}}" alt="{{$value->emploi}}"> </td>
            <td><form method="get" action="{{action('ListEmploi@supprimer',$value->id)}}">
              <button class="btn btn-secondary" onclick="return confirm('Vous etes sur de supprimer cet emplois')" type="submit">Supprimer
              </button>
              </form></td>
            
              <td>
                <form method="get" action="{{action('ListEmploi@GestionEmploi',$value->id)}}">
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
