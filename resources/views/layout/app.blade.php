<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-9"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta name="Fidel Rivera, Alicia Luna, Ana Scariot" content="Reinke">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="distribution" content="global">
    <!-- Styles -->
    @section('cdn-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" integrity="sha256-WAgYcAck1C1/zEl5sBl5cfyhxtLgKGdpI3oKyJffVRI=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/0a1793b862.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/app.css">
    @show
   
    <title>Reinke - @yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url("datos") }}"><img src="images/reinke_logo.png" alt="reinke_logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul id="menu-principal" class="navbar-nav mr-auto ">
          </ul>
          @if(Auth::check() === true)  
          <span class="navbar-text">
            <span class="welcome-user"><strong>Bienvenido:</strong> {{ Auth::user()->name }}</span>
          </span>
          <span class="navbar-text">
            <a href="{{ url('datos') }}"><strong>Datos</strong></a>
          </span>
          <span class="navbar-text">
              <a href="{{ url('dashboard') }}"><strong>Dashboard</strong></a>
          </span>
          <span class="navbar-text">
            <a href="{{ url('historial') }}"><strong>Historial</strong></a>
          </span>
          <span class="navbar-text">
            <a href="{{ url('ayuda') }}"><strong>Ayuda</strong></a>
          </span>
          <span class="navbar-text">
          <a href="{{ url('salir') }}"><strong>Salir</strong></a>
          </span>
           @else
            <span class="navbar-text">
              <a href="{{ url('registro') }}">Registrarse</a>
            </span>
          @endif
        </div>
      </nav>
    
    <div class="app-container">
        @yield('content')
    </div>

    {{-- <footer>
      <p>Todos los derchos rescervados Universidad Veracruzana</p>
    </footer> --}}
    
    @section('js')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    @show
</body>
</html>