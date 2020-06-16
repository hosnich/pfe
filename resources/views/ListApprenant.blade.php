<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>


@extends('layouts.app')

@section('content')

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

<br>
<br>
<button onclick="window.location='{{ url("AjoutApprenant") }}'" class="btn btn-primary pull-right">Ajouter un apprenant</button>


@if (count($User) < 1)

<h1 align="center">Aucun apprenant pour le moment</h1>

@else

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>cin</th>
      <th>Date Naissance</th>
      <th>Supprimer</th>
      <th>Modifier</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($User as $value)
      <tr>
          <th scope="row">{{ $value->id }}</th>
          <td> {{ $value->nom }} </td>
          <td> {{ $value->prenom }} </td>
          <td> {{ $value->cin }} </td>
          <td> {{ $value->dateNais }} </td>
          <td><form method="get" action="{{action('ListApprenant@supprimer',$value['id'])}}">
          <button class="btn btn-secondary" onclick="return confirm('Vous etes sur de supprimer cet apprenant')" type="submit">Supprimer
          </button>
          </form></td>
          
          <td><form method="get" action="{{action('ListFormateur@GestionProfile',$value->id)}}">            
            <button class="btn btn-secondary"  type="submit">Modifier
            </button>
            </form></td>

        </tr>
      @endforeach
  </tbody>
</table>
@endif
@endsection
</html>