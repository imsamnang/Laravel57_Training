<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<title> @yield('pagetitle', 'SmartAdmin') </title>
		<meta name="description" content="">
		<meta name="author" content="">			
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">		
		<!-- #CSS Links -->
		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/backend/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/backend/css/font-awesome.min.css')}}">
		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/backend/css/smartadmin-production-plugins.min.css')}}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/backend/css/smartadmin-production.min.css')}}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/backend/css/smartadmin-skins.min.css')}}">
		<!-- SmartAdmin RTL Support -->
		{{-- <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/backend/css/demo.min.css')}}"> --}}
		<!-- #FAVICONS -->
		<link rel="shortcut icon" href="{{asset('assets/backend/img/favicon/favicon.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{asset('assets/backend/img/favicon/favicon.ico')}}" type="image/x-icon">
		<!-- #GOOGLE FONT -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
		@stack('css')
	</head>

	<body class="desktop-detected pace-done fixed-header smart-style-3">
		<!-- #HEADER -->
		<header id="header">			
			@include('includes.backend.top_header')
		</header>
		<!-- Left panel : Navigation area -->
		<aside id="left-panel">
			@include('includes.backend.left_sidebar')
		</aside>
		<!-- END NAVIGATION -->
		<!-- MAIN PANEL -->
		<div id="main" role="main">
			<!-- MAIN CONTENT -->
			<div id="content">
				<!-- row -->
				<div class="row">					
					@include('includes.backend.breadcrumb');
				</div>
				<!-- end row -->				
				<!-- widget grid -->
				<section id="widget-grid" class="">				
					<!-- row -->
					<div class="row">						
						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">							
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-0">
								<header>
									<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
									<h2>Widget Title </h2>													
								</header>				
								<!-- widget div-->
								<div>									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										<input class="form-control" type="text">	
									</div>
									<!-- end widget edit box -->									
									<!-- widget content -->
									<div class="widget-body">										
										<!-- this is what the user will see -->				
									</div>
									<!-- end widget content -->									
								</div>
								<!-- end widget div -->								
							</div>
							<!-- end widget -->				
						</article>
						<!-- WIDGET END -->						
					</div>				
					<!-- end row -->				
					<!-- row -->				
					<div class="row">				
						<!-- a blank row to get started -->
						<div class="col-sm-12">
							<!-- your contents here -->
							@yield('main-content')

						</div>							
					</div>				
					<!-- end row -->				
				</section>
				<!-- end widget grid -->
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN PANEL -->

		<!-- PAGE FOOTER -->
			@include('includes.backend.footer')
		<!-- END SHORTCUT AREA -->

	<script data-pace-options='{ "restartOnRequestAfter": true }' src="{{asset('assets/backend/js/plugin/pace/pace.min.js')}}"></script>
	<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		if (!window.jQuery) {
			document.write('<script src="{{asset('assets/backend/js/libs/jquery-3.2.1.min.js')}}"><\/script>');
		}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script>
		if (!window.jQuery.ui) {
			document.write('<script src="{{asset('assets/backend/js/libs/jquery-ui.min.js')}}"><\/script>');
		}
	</script>
	<!-- IMPORTANT: APP CONFIG -->
	<script src="{{asset('assets/backend/js/app.config.js')}}"></script>
	<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
	<script src="{{asset('assets/backend/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js')}}"></script> 
	<!-- BOOTSTRAP JS -->
	<script src="{{asset('assets/backend/js/bootstrap/bootstrap.min.js')}}"></script>
	<!-- CUSTOM NOTIFICATION -->
	<script src="{{asset('assets/backend/js/notification/SmartNotification.min.js')}}"></script>
	<!-- JARVIS WIDGETS -->
	<script src="{{asset('assets/backend/js/smartwidgets/jarvis.widget.min.js')}}"></script>
	<!-- EASY PIE CHARTS -->
	{{-- <script src="{{asset('assets/backend/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script> --}}
	<!-- SPARKLINES -->
	<script src="{{asset('assets/backend/js/plugin/sparkline/jquery.sparkline.min.js')}}"></script>
	<!-- JQUERY VALIDATE -->
	{{-- <script src="{{asset('assets/backend/js/plugin/jquery-validate/jquery.validate.min.js')}}"></script> --}}
	<!-- JQUERY MASKED INPUT -->
	{{-- <script src="{{asset('assets/backend/js/plugin/masked-input/jquery.maskedinput.min.js')}}"></script> --}}
	<!-- JQUERY SELECT2 INPUT -->
	<script src="{{asset('assets/backend/js/plugin/select2/select2.min.js')}}"></script>
	<!-- JQUERY UI + Bootstrap Slider -->
	<script src="{{asset('assets/backend/js/plugin/bootstrap-slider/bootstrap-slider.min.js')}}"></script>
	<!-- browser msie issue fix -->
	<script src="{{asset('assets/backend/js/plugin/msie-fix/jquery.mb.browser.min.js')}}"></script>
	<!-- FastClick: For mobile devices -->
	<script src="{{asset('assets/backend/js/plugin/fastclick/fastclick.min.js')}}"></script>
	<!-- Demo purpose only -->
	{{-- <script src="{{asset('assets/backend/js/demo.min.js')}}"></script> --}}
	<!-- MAIN APP JS FILE -->
	<script src="{{asset('assets/backend/js/app.min.js')}}"></script>
	<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
	<!-- Voice command : plugin -->
	<script src="{{asset('assets/backend/js/speech/voicecommand.min.js')}}"></script>
	<!-- SmartChat UI : plugin -->
  {{-- 		<script src="{{asset('assets/backend/js/smart-chat-ui/smart.chat.ui.min.js')}}"></script>
	<script src="{{asset('assets/backend/js/smart-chat-ui/smart.chat.manager.min.js')}}"></script> --}}
	<script type="text/javascript">
		$(document).ready(function() {
			 pageSetUp();				 
		})		
	</script>

	@stack('js')

	</body>

</html>