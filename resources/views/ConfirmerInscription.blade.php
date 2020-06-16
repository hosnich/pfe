<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6 offset-sm-3 col-md-6 offset-md-3">
                
                <ul class="nav justify-content-center">
                  <li class="nav-item">
                    <a class="nav-link" href="/ApprenantDashboard">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Profile">Update Profile</a>
                  </li>
               </ul>
                
              </div>
            </div>
          </div>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nom }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ ('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ 'Confirmer inscription du Formation' }}</div>

                <div class="card-body">
                    <form method="GET"  enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ ('ID') }}</label>

                            <div class="col-md-6">
                                <input disabled id="id" type="text" class="form-control" name="id" value="{{ $User->id }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $User->nom}}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ $User->prenom }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomFormation" class="col-md-4 col-form-label text-md-right">{{('Nom du Formation') }}</label>

                            <div class="col-md-6">
                                <input disabled id="nomFormation" type="text" class="form-control" name="nomFormation" value="{{ $Formation->nomFormation}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descFormation" class="col-md-4 col-form-label text-md-right">{{('Description du Formation') }}</label>

                            <div class="col-md-6">
                                <input disabled id="descFormation" type="text" class="form-control" name="descFormation" value="{{$Formation->descriptionFormation}}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="dureeFormation" class="col-md-4 col-form-label text-md-right">{{('Durée du Formation') }}</label>

                            <div class="col-md-6">
                                <input disabled id="dureeFormation" type="text" class="form-control" name="dureeFormation" value=" {{$Formation->dureeFormation}} ">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prixFormation" class="col-md-4 col-form-label text-md-right">{{('Prix du Formation') }}</label>

                            <div class="col-md-6">
                                <input disabled id="prixFormation" type="text" class="form-control" name="prixFormation" value=" {{$Formation->prixFormation}} ">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ 'Confirmer' }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
