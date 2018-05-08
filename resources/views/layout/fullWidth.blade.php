<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Logistics</title>
  <!-- Tell the browser to be responsive to screen width -->
  
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('sbadmin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('sbadmin/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('sbadmin/dist/css/sb-admin-2.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ asset('sbadmin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    @yield('css_files')

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
      <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('dashboard') }}">Logistics</a>
            </div>
            <!-- /.navbar-header -->

          @include('common/header')

          
        </nav>

      <div id="page-wrapper" class="full-width">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header hide">@yield('title')</h1>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          @yield('content')
      </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('sbadmin/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <!--script src="{{ asset('sbadmin/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('sbadmin/data/morris-data.js') }}"></script-->

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('sbadmin/dist/js/sb-admin-2.js') }}"></script>
    
    @yield('js_files')

    <script src="<?php echo asset('js/custom.js').'?'.rand(11000, 9999); ?>"></script>
</body>
</html>