<!DOCTYPE html>
<html lang="en-us" id="extr-page">
  <head>
    <meta charset="utf-8">
    <title>@yield('pagetitle', 'Auth Master Page')</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">        
    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/backend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/backend/css/font-awesome.min.css')}}">
    <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/backend/css/smartadmin-production-plugins.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/backend/css/smartadmin-production.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/backend/css/smartadmin-skins.min.css')}}">
    <!-- SmartAdmin RTL Support -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/backend/css/smartadmin-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/backend/css/demo.min.css')}}">
    <!-- #FAVICONS -->
    <link rel="shortcut icon" href="{{asset('assets/backend/img/favicon/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/backend/img/favicon/favicon.ico')}}" type="image/x-icon">
    <!-- #GOOGLE FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
    @stack('css')
  </head>
  
  <body class="animated fadeInDown">
    <header id="header">
      <div id="logo-group">
          <span id="logo"> <img src="{{asset('assets/backend/img/logo.png')}}" alt="SmartAdmin"> </span>
      </div>
      <span id="extr-page-header-space">
        <span class="hidden-mobile hiddex-xs">
          @yield('haveaccount')
        </span>
          @yield('loginregister')          
      </span>
    </header>
    <div id="main" role="main">
        <!-- MAIN CONTENT -->
        <div id="content" class="container">
            <div class="row">
              @yield('auth-content')
            </div>
        </div>
    </div>
    <script src="{{asset('assets/backend/js/plugin/pace/pace.min.js')}}"></script>
    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script> if (!window.jQuery) { document.write('<script src="{{asset('assts/backend/js/libs/jquery-3.2.1.min.js')}}"><\/script>');} </script>

    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script> if (!window.jQuery.ui) { document.write('<script src="{{asset('assts/backend/js/libs/jquery-ui.min.js')}}"><\/script>');} </script>
    <!-- IMPORTANT: APP CONFIG -->
    <script src="{{asset('assets/backend/js/app.config.js')}}"></script>
    <!-- JS TOUCH : include this plugin for mobile drag / drop touch events         
    <script src="{{asset('asset/backend/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js')}}"></script> -->
    <!-- BOOTSTRAP JS -->       
    <script src="{{asset('assets/backend/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- JQUERY VALIDATE -->
    <script src="{{asset('assets/backend/js/plugin/jquery-validate/jquery.validate.min.js')}}"></script>    
    <!-- JQUERY MASKED INPUT -->
    <script src="{{asset('assets/backend/js/plugin/masked-input/jquery.maskedinput.min.js')}}"></script>
    <!-- MAIN APP JS FILE -->
    <script src="{{asset('assets/backend/js/app.min.js')}}"></script>

    @stack('js')

  </body>
</html>