<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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


@if (count($Formation) < 1)

<h1 align="center">Aucun Formation pour le moment</h1>

@else

        @foreach ($Formation as $value)
        <div class="album py-5 bg-light">

        <div class="container"> 
                    <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                 <div class="card-body">
                 
                  <form method="GET" action="{{ action('ConsulterFormation@confirmer',$value->id) }}">

                  <h2>{{ $value->nomFormation }}</h2>
                  <div class="container">
                    <div>{{ $value->descriptionFormation }}</div>
                    <div>{{ $value->dureeFormation }}</div>
                    <div>{{ $value->prixFormation }}</div>
                        
                  </div>

                  <button type="submit" class="btn btn-secondary">Inscrire</button>
                </form>
                
                </div>
              </div>
            </div>
            
            @endforeach
        
@endif
@endsection
</html>
