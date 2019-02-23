 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <!-- Comfortaa font -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet"> 
    <!--icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}"  />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" ></script>

    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
     <!-- Custom JS -->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"  defer></script> 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

  <div id="wrapper" class="container-fluid">
     <!--Sidebar-->
        @if(Auth::check())
        @include('includes.sidebar')
        @endif
     <!--/Sidebar-->
     <!--MainContent-->
       
         <div class="row h-100">

     
            <div class="col-lg-1 nopadding"></div>
            @yield('content')
         </div>
        

  </div>
</body>
</html>
