<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <?php /*  
  <!-- Bootstrap Core CSS -->
    <link href="{{ asset('sbadmin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('sbadmin/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('sbadmin/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('sbadmin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('select2/css/select2.min.css') }}" rel="stylesheet">
    */ ?>
    <link href="{{ url(mix('css/app.css')) }}" rel="stylesheet" type="text/css">
    
    @yield('css_files')

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        var site_url = '{{ url("/") }}';
        var csrf_token = '{{ csrf_token() }}';
    </script>

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
                <a class="navbar-brand" href="{{ route('dashboard') }}">
                    <img src="{{ $site_info['logo'] or '' }}"  height="40" />
                    
                </a>
                <a href="javascript:void(0);" class="toggle-full-width bs-tooltip"  data-placement="bottom" data-original-title="Toggle Screen Size"><i class="fa fa-desktop fa-fw"></i> </a>
            </div>
            <!-- /.navbar-header -->
            
        @include('common/header')

        @include('common/sidemenu')

        </nav>

      <div id="page-wrapper">
      
      @if ($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{ $message }}</p>
				</div>
			@endif
            @if ($message = Session::get('error'))
				<div class="alert alert-danger">
					<p>{{ $message }}</p>
				</div>
			@endif
          
          @yield('content')
</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php /*
    <!-- jQuery -->
    <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('sbadmin/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('sbadmin/dist/js/sb-admin-2.js') }}"></script>
    
    <script src="{{ asset('select2/js/select2.full.min.js') }}"></script>
    
    <script src="{{ asset('js/moment.js') }}"></script>
    */ ?>
    <script src="<?php echo url(mix('js/all.js')).'?'.rand(11000, 9999); ?>"></script>
    @yield('js_files')
    <?php /*
    <script src="<?php echo asset('js/custom.js').'?'.rand(11000, 9999); ?>"></script>
     */ ?>   
     
    @yield('custom_js')
    
</body>

</html>