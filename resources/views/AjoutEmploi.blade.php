<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>




@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{('Ajouter un Emplois') }}</div>

                <div class="card-body">
                    
                     <form method="POST" action="{{ action('AjoutEmploi@create') }}" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group row">
                            <label for="idFormation" class="col-md-4 col-form-label text-md-right">{{('id Formation') }}</label>

                            <div class="col-md-6">
                                <input id="idFormation" type="text" class="form-control @error('idFormation') is-invalid @enderror" name="idFormation" value="{{ old('idFormation') }}" required autocomplete="id" autofocus>

                                @error('idFormation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <script type="text/javascript">
                            function save()
                             {
                                var_dump($nom->getElementById('nom'));
                                var_dump($desc->getElementById('desc'));
                                var_dump($fichier->getElementById('fichier'));
                                
                              }
                           </script>



                        <div class="form-group row">
                            <label for="classe" class="col-md-4 col-form-label text-md-right">{{ __('Classe') }}</label>

                            <div class="col-md-6">
                                <input id="classe" type="text" class="form-control @error('classe') is-invalid @enderror" name="classe" value="{{ old('classe') }}" required autocomplete="classe" autofocus>

                                @error('classe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emploi" class="col-md-4 col-form-label text-md-right">{{ __('emploi') }}</label>

                            <div class="col-md-6">
                                <input id="emploi" type="file" class="form-control @error('emploi') is-invalid @enderror" name="emploi" value="{{ old('emploi') }}" required autocomplete="emploi" autofocus>

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
                                    {{('Ajouter') }}
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