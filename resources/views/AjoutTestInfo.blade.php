<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>




@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{('Entrer les informations du test') }}</div>

                <div class="card-body">
                    
                     <form method="get" action="{{ action('AjoutTest@AjoutTest') }}"> 
                        @csrf

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('nom Test') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control" name="nom">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nombreQuestion" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de questions') }}</label>

                            <div class="col-md-6">
                                <input id="nombreQuestion" type="text" class="form-control" name="nombreQuestion">
                            </div>
                        </div>

                    
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{('Continuer') }}
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