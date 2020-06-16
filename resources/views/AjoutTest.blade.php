<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>




@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{('Ajouter un test') }}</div>

                
                
                <div class="card-body">
                    
                     <form method="post" action="{{ action('AjoutTest@AjoutQuestion') }}"> 
                        @csrf
                        @for ($i = 1; $i <= $nombreQuestion; $i++)
                        
                        <div class="form-group row">
                            <label for="question" class="col-md-4 col-form-label text-md-right">{{( $i.')question ' .$i) }}</label>

                            <div class="col-md-6">
                                <input id="question" type="text" class="form-control" name="question">
                            </div>
                        </div>
                    

                        @for ($j = 1; $j <= 4; $j++)

                <div>
                    
                        <div class="form-group row">
                           <label for="reponse" class="col-md-4 col-form-label text-md-right">{{('reponse ' .$j) }}</label>

                           <div class="col-md-6">
                               <input id="reponse" type="text" class="form-control" name="reponse">
                           </div>
                           <div class="custom-control custom-checkbox">
                            <input name="Juste" id="Juste" type="checkbox" value="Juste">
                           <label for="Juste" style="padding-left: 15px!important;">Juste</label>
                        </div>
                       </div>


                       @endfor

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{('Ajouter') }}
                        </button>
                    </div>
                </form>

               </div>
            </div>
               @endfor
               
            </div>
       
            </div>
        </div>
    </div>
</div>
@endsection
</html>