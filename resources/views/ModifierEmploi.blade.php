<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>




@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{('Modifier un Emploi') }}</div>

                <div class="card-body">
                    
                     <form method="POST" action="{{ action('ListEmploi@update') }}"> 
                        @csrf


                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>

                            <div class="col-md-6">
                                <input disabled id="id" type="text" class="form-control" name="id" value="{{ $Emploi['id'] }}" >
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="idFormation" class="col-md-4 col-form-label text-md-right">{{ __('ID Formation') }}</label>

                            <div class="col-md-6">
                                <input id="idFormation" type="text" class="form-control" name="idFormation" value="{{ $Emploi['idFormation'] }}" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="classe" class="col-md-4 col-form-label text-md-right">{{ __('Classe') }}</label>

                            <div class="col-md-6">
                                <input id="classe" type="text" class="form-control @error('classe') is-invalid @enderror" name="classe" value="{{ $Emploi['classe'] }}" required autocomplete="classe" autofocus>

                                @error('classe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="emploi" class="col-md-4 col-form-label text-md-right">{{ __('Emploi') }}</label>

                            <div class="col-md-6">
                                <input id="emploi" type="file" class="form-control @error('emploi') is-invalid @enderror" name="emploi" value=" /storage/app/fichier/emploi/{{$Emploi->emploi}} ">

                                @error('emploi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{('Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</html>