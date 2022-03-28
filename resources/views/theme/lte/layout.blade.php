<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo', 'EduPizzeria') | La Mejor Pizza a la Piedra</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/skins/_all-skins.min.css")}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    @yield("styles") 

    <link rel="stylesheet" href="{{asset("css/custom.css")}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- Inicio Header -->
    @include("theme/$theme/header")
    <!-- Fn Header -->
    <!-- Inicio Aside -->
    @include("theme/$theme/aside")
    <!-- Fin Aside -->
    <div class="content-wrapper">
    <!-- Inicio Content Header -->
        <section class="content">
          @yield('contenido')
        </section>
    </div>
    <!-- Inicio Footer -->
    @include("theme/$theme/footer")
    <!-- Fin Footer -->
  </div>
  <!-- jQuery 3 -->
  <script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
  <!-- SlimScroll -->
  <script src="{{asset("assets/$theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
  <!-- FastClick -->
  <script src="{{asset("assets/$theme/bower_components/fastclick/lib/fastclick.js")}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
  @yield("scriptsPlugins")
  <script src="{{asset("js/jquery-validation/jquery.validate.min.js")}}"></script>
  <script src="{{asset("js/jquery-validation/localization/messages_es.min.js")}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="{{asset("js/jquery-validation/funciones.js")}}"></script>
   <script src="{{asset("js/scripts.js")}}"></script>
  <!-- AdminLTE for demo purposes -->
  @yield("scripts")
  </body>
</html>