<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Final Project Kelompok 35</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="{{ asset ('/assets/fontawesome/js/all.js') }}"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset ('/assets/plugins/bootstrap/css/bootstrap.min.css') }}">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="{{ asset ('/assets/plugins/elegant_font/css/style.css') }}">    
    <!-- Theme CSS -->
    
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

    <link id="theme-style" rel="stylesheet" href="{{ asset ('/assets/css/styles.css') }}">

    <script src="{{ asset('/js/app.js') }}" defer></script>
    <!-- Collapsible Form -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head> 

<body class="landing-page">   
	
    <div class="page-wrapper">
        
        <!-- ******Header****** -->
        @include('layouts.partial.head')
        <!--//header-->
        
        @yield('content')
        
    </div><!--//page-wrapper-->
    <!--/footer-->
    @include('layouts.partial.foot')
   
    @stack('script')

</body>
</html> 

