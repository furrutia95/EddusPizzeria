<!DOCTYPE html>
<html lang="en">
  <head>
     <title>@yield('titulo', 'EduPizzeria') | La Mejor Pizza a la Piedra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("assets/pizzeria/css/open-iconic-bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/pizzeria/css/animate.css")}}">
    
    <link rel="stylesheet" href="{{asset("assets/pizzeria/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/pizzeria/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/pizzeria/css/magnific-popup.css")}}">

    <link rel="stylesheet" href="{{asset("assets/pizzeria/css/aos.css")}}">

    <link rel="stylesheet" href="{{asset("assets/pizzeria/css/ionicons.min.css")}}">

    <link rel="stylesheet" href="{{asset("assets/pizzeria/css/bootstrap-datepicker.css")}}">
    <link rel="stylesheet" href="{{asset("assets/pizzeria/css/jquery.timepicker.css")}}">

    
    <link rel="stylesheet" href="{{asset("assets/pizzeria/css/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("assets/pizzeria/css/icomoon.css")}}">
    <link rel="stylesheet" href="{{asset("assets/pizzeria/css/style.css")}}">
  </head>
  <!--Body-->
  <body>
    <!--Inicio Header -->
    @include("theme/pizzeria/header")
    <!-- Fn Header -->
    @yield('navbar')

    @yield('contenido')
    <!-- Inicio Footer -->
    @include("theme/pizzeria/footer")
    <!-- Fin Footer -->

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset("assets/pizzeria/js/jquery.min.js")}}"></script>
  <script src="{{asset("assets/pizzeria/js/jquery-migrate-3.0.1.min.js")}}"></script>
  <script src="{{asset("assets/pizzeria/js/popper.min.js")}}"></script>
  <script src="{{asset("assets/pizzeria/js/bootstrap.min.js")}}"></script>
  <script src="{{asset("assets/pizzeria/js/jquery.easing.1.3.js")}}"></script>
  <script src="{{asset("assets/pizzeria/js/jquery.waypoints.min.js")}}"></script>
  <script src="{{asset("assets/pizzeria/js/jquery.stellar.min.js")}}"></script>
  <script src="{{asset("assets/pizzeria/js/owl.carousel.min.js")}}"></script>
  <script src="{{asset("assets/pizzeria/js/jquery.magnific-popup.min.js")}}"></script>
  <script src="{{asset("assets/pizzeria/js/aos.js")}}"></script>
  <script src="{{asset("assets/pizzeria/js/jquery.animateNumber.min.js")}}"></script>
  <script src="{{asset("assets/pizzeria/js/bootstrap-datepicker.js")}}"></script>
  <script src="{{asset("assets/pizzeria/js/jquery.timepicker.min.js")}}"></script>
  <script src="{{asset("assets/pizzeria/js/scrollax.min.js")}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset("assets/pizzeria/js/google-map.js")}}"></script>
  <script src="{{asset("assets/pizzeria/js/main.js")}}"></script>
    
  </body>
</html>