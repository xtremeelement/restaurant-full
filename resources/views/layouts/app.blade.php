<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Restaurant App</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
  
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

       
    </head>
    <body>
    <section id="app-layout">
      @include('includes.side-menu')
      <section id="content-section">
         @yield('content')
      </section>
    </section>
 
    </body>
</html>