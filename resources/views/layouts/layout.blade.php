<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title') | SIRH-DRH</title>

    @yield('header')
    <!-- Tell the browser to be responsive to screen width -->
    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
      name="viewport"
    />
    <!-- Bootstrap 3.3.6 -->
    <!-- <link href="{{ asset('bootstrap/css/bootstrap-3.3.7.min.css') }}" rel="stylesheet" type="text/css" /> -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />

    <!-- Font Awesome Icons -->
    <link href="{{ ('fonts/css/all.css') }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ asset('dist/css/ionicons/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('dist/css/adminLte-2.3.11.min.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-blue.min.css') }}" />

    <!-- <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>



  </head>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- Header -->
        @include('layouts/header')

        <!-- Sidebar -->
        @include('layouts/sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('layouts/message')
            @yield('content')


        </div><!-- /.content-wrapper -->

        <!-- Footer -->
        @include('layouts/footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
   
    <!-- jQuery 2.2.3 -->
    <!-- <script src="{{ asset('jquery/jquery-2.2.3.min.js') }}"></script> -->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/app.min.js') }}" type="text/javascript"></script>


  </body>
</html>
