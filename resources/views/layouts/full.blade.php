<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Restaurant App</title>
        <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
       
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    </head>
    <body>
    <section id="app-layout">
    @include('includes.side-menu')
    <div class="welcome-jumbo">
      {{-- <div class="status">NEW</div> --}}
      {{-- <h1>Brick Furnace</h1> --}}
      {{-- <img src="https://images.pexels.com/photos/3649208/pexels-photo-3649208.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="burger-fries"> --}}
      {{-- <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" class="burger-fries"> --}}
    </div>
  </section>
  @yield('content')
  
  
    </body>
</html>
