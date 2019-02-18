<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> SmartAdmin </title>
		<meta name="description" content="">
		<meta name="author" content="">
			
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production-plugins.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">

		<!-- SmartAdmin RTL Support -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> 

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/demo.min.css">

		<!-- FAVICONS -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">

	</head>

	<body class="">

		<!-- HEADER -->
		<header id="header">
			<div id="logo-group">
				<!-- PLACE YOUR LOGO HERE -->
				<span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>
				<!-- END LOGO PLACEHOLDER -->
				<!-- Note: The activity badge color changes when clicked and resets the number to 0
				Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
				<span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>
				<!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
				<div class="ajax-dropdown">
					<div class="btn-group btn-group-justified" data-toggle="buttons">
						<label class="btn btn-default">
							<input type="radio" name="activity" id="ajax/notify/mail.html">
							Msgs (14) </label>
						<label class="btn btn-default">
							<input type="radio" name="activity" id="ajax/notify/notifications.html">
							notify (3) </label>
						<label class="btn btn-default">
							<input type="radio" name="activity" id="ajax/notify/tasks.html">
							Tasks (4) </label>
					</div>
					<!-- notification content -->

						<div class="alert alert-transparent">
							<h4>Click a button to show messages here</h4>
							This blank page message helps protect your privacy, or you can show the first message here automatically.
						</div>
						<i class="fa fa-lock fa-4x fa-border"></i>
					</div>
					<!-- end notification content -->
					<!-- footer: refresh area -->
					<span> Last updated on: 12/12/2013 9:43AM
						<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
							<i class="fa fa-refresh"></i>
						</button> </span>
					<!-- end footer -->
			</div>
				<!-- END AJAX-DROPDOWN -->
			</div>
			<!-- projects dropdown -->
			<div class="project-context hidden-xs">
				<span class="label">Projects:</span>
				<span class="project-selector dropdown-toggle" data-toggle="dropdown">Recent projects <i class="fa fa-angle-down"></i></span>
				<ul class="dropdown-menu">
					<li>
						<a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
					</li>
					<li>
						<a href="javascript:void(0);">Notes on pipeline upgradee</a>
					</li>
					<li>
						<a href="javascript:void(0);">Assesment Report for merchant account</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
					</li>
				</ul>
				<!-- end dropdown-menu-->
			</div>
			<!-- end projects dropdown -->
			<!-- pulled right: nav area -->
			<div class="pull-right">				
				<!-- collapse menu button -->
				<div id="hide-menu" class="btn-header pull-right">
					<span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
				</div>
				<!-- end collapse menu -->				
				<!-- #MOBILE -->
				<!-- Top menu profile link : this shows only when top menu is active -->
				<ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
					<li class="">
						<a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown"> 
							<img src="img/avatars/sunny.png" alt="John Doe" class="online" />  
						</a>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- logout button -->
				<div id="logout" class="btn-header transparent pull-right">
					<span> <a href="login.html" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
				</div>
				<!-- end logout button -->

				<!-- search mobile button (this is hidden till mobile view port) -->
				<div id="search-mobile" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
				</div>
				<!-- end search mobile button -->
				<!-- input: search field -->
				<form action="search.html" class="header-search pull-right">
					<input id="search-fld"  type="text" name="param" placeholder="Find reports and more" data-autocomplete='[
					"ActionScript",
					"AppleScript",
					"Asp",
					"BASIC",
					"C",
					"C++",
					"Clojure",
					"COBOL",
					"ColdFusion",
					"Erlang",
					"Fortran",
					"Groovy",
					"Haskell",
					"Java",
					"JavaScript",
					"Lisp",
					"Perl",
					"PHP",
					"Python",
					"Ruby",
					"Scala",
					"Scheme"]'>
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
					<a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
				</form>
				<!-- end input: search field -->
				<!-- fullscreen button -->
				<div id="fullscreen" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
				</div>
				<!-- end fullscreen button -->				
				<!-- #Voice Command: Start Speech -->
				<div id="speech-btn" class="btn-header transparent pull-right hidden-sm hidden-xs">
					<div> 
						<a href="javascript:void(0)" title="Voice Command" data-action="voiceCommand"><i class="fa fa-microphone"></i></a> 
						<div class="popover bottom"><div class="arrow"></div>
							<div class="popover-content">
								<h4 class="vc-title">Voice command activated <br><small>Please speak clearly into the mic</small></h4>
								<h4 class="vc-title-error text-center">
									<i class="fa fa-microphone-slash"></i> Voice command failed
									<br><small class="txt-color-red">Must <strong>"Allow"</strong> Microphone</small>
									<br><small class="txt-color-red">Must have <strong>Internet Connection</strong></small>
								</h4>
								<a href="javascript:void(0);" class="btn btn-success" onclick="commands.help()">See Commands</a> 
								<a href="javascript:void(0);" class="btn bg-color-purple txt-color-white" onclick="$('#speech-btn .popover').fadeOut(50);">Close Popup</a> 
							</div>
						</div>
					</div>
				</div>
				<!-- end voice command -->
				<!-- multiple lang dropdown : find all flags in the flags page -->
				<ul class="header-dropdown-list hidden-xs">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="img/blank.gif" class="flag flag-us" alt="United States"> <span> English (US) </span> <i class="fa fa-angle-down"></i> </a>
						<ul class="dropdown-menu pull-right">
							<li class="active">
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-us" alt="United States"> English (US)</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-fr" alt="France"> Français</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-es" alt="Spanish"> Español</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-de" alt="German"> Deutsch</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-jp" alt="Japan"> 日本語</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-cn" alt="China"> 中文</a>
							</li>	
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-it" alt="Italy"> Italiano</a>
							</li>	
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-pt" alt="Portugal"> Portugal</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-ru" alt="Russia"> Русский язык</a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-kr" alt="Korea"> 한국어</a>
							</li>						
							
						</ul>
					</li>
				</ul>
				<!-- end multiple lang -->
			</div>
			<!-- end pulled right: nav area -->
		</header>
		<!-- END HEADER -->
		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		<aside id="left-panel">
			<!-- User info -->
			<div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
					
					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="img/avatars/sunny.png" alt="me" class="online" /> 
						<span>
							john.doe 
						</span>
						<i class="fa fa-angle-down"></i>
					</a> 					
				</span>
			</div>
			<!-- end user info -->
			<nav>
				<ul>
					<li>
						<a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
						<ul>
							<li>
								<a href="index.html" title="Dashboard"><span class="menu-item-parent">Analytics Dashboard</span></a>
							</li>
							<li>
								<a href="dashboard-marketing.html" title="Dashboard"><span class="menu-item-parent">Marketing Dashboard</span></a>
							</li>
							<li>
								<a href="dashboard-social.html" title="Dashboard"><span class="menu-item-parent">Social Wall</span></a>
							</li>
						</ul>	
					</li>
					<li class="top-menu-invisible">
						<a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">SmartAdmin Intel</span></a>
						<ul>
							<li class="">
								<a href="layouts.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-gear"></i> <span class="menu-item-parent">App Layouts</span></a>
							</li>
							<li class="">
								<a href="skins.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Prebuilt Skins</span></a>
							</li>
							<li>
								<a href="applayout.html"><i class="fa fa-cube"></i> App Settings</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="inbox.html"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Outlook</span> <span class="badge pull-right inbox-badge margin-right-13">14</span></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Graphs</span></a>
						<ul>
							<li>
								<a href="flot.html">Flot Chart</a>
							</li>
							<li>
								<a href="morris.html">Morris Charts</a>
							</li>
							<li>
								<a href="sparkline-charts.html">Sparklines</a>
							</li>
							<li>
								<a href="easypie-charts.html">EasyPieCharts</a>
							</li>
							<li>
								<a href="dygraphs.html">Dygraphs</a>
							</li>
							<li>
								<a href="chartjs.html">Chart.js</a>
							</li>
							<li>
								<a href="hchartable.html">HighchartTable <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span></a>
						<ul>
							<li>
								<a href="table.html">Normal Tables</a>
							</li>
							<li>
								<a href="datatables.html">Data Tables <span class="badge inbox-badge bg-color-greenLight hidden-mobile">responsive</span></a>
							</li>
							<li>
								<a href="jqgrid.html">Jquery Grid</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Forms</span></a>
						<ul>
							<li>
								<a href="form-elements.html">Smart Form Elements</a>
							</li>
							<li>
								<a href="form-templates.html">Smart Form Layouts</a>
							</li>
							<li>
								<a href="validation.html">Smart Form Validation</a>
							</li>
							<li>
								<a href="bootstrap-forms.html">Bootstrap Form Elements</a>
							</li>
							<li>
								<a href="bootstrap-validator.html">Bootstrap Form Validation</a>
							</li>
							<li>
								<a href="plugins.html">Form Plugins</a>
							</li>
							<li>
								<a href="wizard.html">Wizards</a>
							</li>
							<li>
								<a href="other-editors.html">Bootstrap Editors</a>
							</li>
							<li>
								<a href="dropzone.html">Dropzone</a>
							</li>
							<li>
								<a href="image-editor.html">Image Cropping</a>
							</li>
							<li>
								<a href="ckeditor.html">CK Editor</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">UI Elements</span></a>
						<ul>
							<li>
								<a href="general-elements.html">General Elements</a>
							</li>
							<li>
								<a href="buttons.html">Buttons</a>
							</li>
							<li>
								<a href="#">Icons</a>
								<ul>
									<li>
										<a href="fa.html"><i class="fa fa-plane"></i> Font Awesome</a>
									</li>
									<li>
										<a href="glyph.html"><i class="glyphicon glyphicon-plane"></i> Glyph Icons</a>
									</li>
									<li>
										<a href="flags.html"><i class="fa fa-flag"></i> Flags</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="grid.html">Grid</a>
							</li>
							<li>
								<a href="treeview.html">Tree View</a>
							</li>
							<li>
								<a href="nestable-list.html">Nestable Lists</a>
							</li>
							<li>
								<a href="jqui.html">JQuery UI</a>
							</li>
							<li>
								<a href="typography.html">Typography</a>
							</li>
							<li>
								<a href="#">Six Level Menu</a>
								<ul>
									<li>
										<a href="#"><i class="fa fa-fw fa-folder-open"></i> Item #2</a>
										<ul>
											<li>
												<a href="#"><i class="fa fa-fw fa-folder-open"></i> Sub #2.1 </a>
												<ul>
													<li>
														<a href="#"><i class="fa fa-fw fa-file-text"></i> Item #2.1.1</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-fw fa-plus"></i> Expand</a>
														<ul>
															<li>
																<a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#"><i class="fa fa-fw fa-folder-open"></i> Item #3</a>
		
										<ul>
											<li>
												<a href="#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level </a>
												<ul>
													<li>
														<a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
													</li>
												</ul>
											</li>
										</ul>	
									</li>
									<li>
										<a href="#" class="inactive"><i class="fa fa-fw fa-folder-open"></i> Item #4 (disabled)</a>
									</li>	
									
								</ul>
							</li>
						</ul>
					</li>	
					<li class="active">
						<a href="widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-cloud"><em>3</em></i> <span class="menu-item-parent">Cool Features!</span></a>
						<ul>
							<li>
								<a href="calendar.html"><i class="fa fa-lg fa-fw fa-calendar"></i> <span class="menu-item-parent">Calendar</span></a>
							</li>
							<li>
								<a href="gmap-xml.html"><i class="fa fa-lg fa-fw fa-map-marker"></i> <span class="menu-item-parent">GMap Skins</span><span class="badge bg-color-greenLight pull-right inbox-badge">9</span></a>
							</li>
						</ul>
					</li>	
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-puzzle-piece"></i> <span class="menu-item-parent">App Views</span></a>
						<ul>
							<li>
								<a href="projects.html"><i class="fa fa-file-text-o"></i> Projects</a>
							</li>	
							<li>
								<a href="blog.html"><i class="fa fa-paragraph"></i> Blog</a>
							</li>
							<li>
								<a href="gallery.html"><i class="fa fa-picture-o"></i> Gallery</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-comments"></i> Forum Layout</a>
								<ul>
									<li><a href="forum.html">General View</a></li>
									<li><a href="forum-topic.html">Topic View</a></li>
									<li><a href="forum-post.html">Post View</a></li>
								</ul>
							</li>
							<li>
								<a href="profile.html"><i class="fa fa-group"></i> Profile</a>
							</li>
							<li>
								<a href="timeline.html"><i class="fa fa-clock-o"></i> Timeline</a>
							</li>
							<li>
								<a href="search.html"><i class="fa fa-search"></i>  Search Page</a>
							</li>
						</ul>		
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-shopping-cart"></i> <span class="menu-item-parent">E-Commerce</span></a>
						<ul>
							<li><a href="orders.html">Orders</a></li>
							<li><a href="products-view.html">Products View</a></li>
							<li><a href="products-detail.html">Products Detail</a></li>
						</ul>
					</li>	
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-windows"></i> <span class="menu-item-parent">Miscellaneous</span></a>
						<ul>
							<li>
								<a href="../Landing_Page/" target="_blank">Landing Page <i class="fa fa-external-link"></i></a>
							</li>
							<li>
								<a href="pricing-table.html">Pricing Tables</a>
							</li>
							<li>
								<a href="invoice.html">Invoice</a>
							</li>
							<li>
								<a href="login.html" target="_top">Login</a>
							</li>
							<li>
								<a href="register.html" target="_top">Register</a>
							</li>
							<li>
								<a href="forgotpassword.html" target="_top">Forgot Password</a>
							</li>
							<li>
								<a href="lock.html" target="_top">Locked Screen</a>
							</li>
							<li>
								<a href="error404.html">Error 404</a>
							</li>
							<li>
								<a href="error500.html">Error 500</a>
							</li>
							<li>
								<a href="blank_.html">Blank Page</a>
							</li>
						</ul>
					</li>
					<li class="chat-users top-menu-invisible">
						<a href="#"><i class="fa fa-lg fa-fw fa-comment-o"><em class="bg-color-pink flash animated">!</em></i> <span class="menu-item-parent">Smart Chat API <sup>beta</sup></span></a>
						<ul>
							<li>
								<!-- DISPLAY USERS -->
								<div class="display-users">

									<input class="form-control chat-user-filter" placeholder="Filter" type="text">
									
								  	<a href="#" class="usr" 
									  	data-chat-id="cha1" 
									  	data-chat-fname="Sadi" 
									  	data-chat-lname="Orlaf" 
									  	data-chat-status="busy" 
									  	data-chat-alertmsg="Sadi Orlaf is in a meeting. Please do not disturb!" 
									  	data-chat-alertshow="true" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/5.png' alt='Sadi Orlaf'>
												<div class='usr-card-content'>
													<h3>Sadi Orlaf</h3>
													<p>Marketing Executive</p>
												</div>
											</div>
										"> 
									  	<i></i>Sadi Orlaf
								  	</a>
								  
									<a href="#" class="usr" 
										data-chat-id="cha2" 
									  	data-chat-fname="Jessica" 
									  	data-chat-lname="Dolof" 
									  	data-chat-status="online" 
									  	data-chat-alertmsg="" 
									  	data-chat-alertshow="false" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/1.png' alt='Jessica Dolof'>
												<div class='usr-card-content'>
													<h3>Jessica Dolof</h3>
													<p>Sales Administrator</p>
												</div>
											</div>
										"> 
									  	<i></i>Jessica Dolof
									</a>
								  
									<a href="#" class="usr" 
									  	data-chat-id="cha3" 
									  	data-chat-fname="Zekarburg" 
									  	data-chat-lname="Almandalie" 
									  	data-chat-status="online" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/3.png' alt='Zekarburg Almandalie'>
												<div class='usr-card-content'>
													<h3>Zekarburg Almandalie</h3>
													<p>Sales Admin</p>
												</div>
											</div>
										"> 
									  	<i></i>Zekarburg Almandalie
									</a>
								 
									<a href="#" class="usr" 
									  	data-chat-id="cha4" 
									  	data-chat-fname="Barley" 
									  	data-chat-lname="Krazurkth" 
									  	data-chat-status="away" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/4.png' alt='Barley Krazurkth'>
												<div class='usr-card-content'>
													<h3>Barley Krazurkth</h3>
													<p>Sales Director</p>
												</div>
											</div>
										"> 
									  	<i></i>Barley Krazurkth
									</a>
								  
									<a href="#" class="usr offline" 
									  	data-chat-id="cha5" 
									  	data-chat-fname="Farhana" 
									  	data-chat-lname="Amrin" 
									  	data-chat-status="incognito" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/female.png' alt='Farhana Amrin'>
												<div class='usr-card-content'>
													<h3>Farhana Amrin</h3>
													<p>Support Admin <small><i class='fa fa-music'></i> Playing Beethoven Classics</small></p>
												</div>
											</div>
										"> 
									  	<i></i>Farhana Amrin (offline)
									</a>
								  
									<a href="#" class="usr offline" 
										data-chat-id="cha6" 
									  	data-chat-fname="Lezley" 
									  	data-chat-lname="Jacob" 
									  	data-chat-status="incognito" 
									  	data-rel="popover-hover" 
									  	data-placement="right" 
									  	data-html="true" 
									  	data-content="
											<div class='usr-card'>
												<img src='img/avatars/male.png' alt='Lezley Jacob'>
												<div class='usr-card-content'>
													<h3>Lezley Jacob</h3>
													<p>Sales Director</p>
												</div>
											</div>
										"> 
									  	<i></i>Lezley Jacob (offline)
									</a>
									
									<a href="chat.html" class="btn btn-xs btn-default btn-block sa-chat-learnmore-btn">About the API</a>

								</div>
								<!-- END DISPLAY USERS -->
							</li>
						</ul>	
					</li>
				</ul>
			</nav>
			<span class="minifyme" data-action="minifyMenu"> 
				<i class="fa fa-arrow-circle-left hit"></i> 
			</span>
		</aside>
		<!-- END NAVIGATION -->

		<!-- MAIN PANEL -->
		<div id="main" role="main">
			<!-- RIBBON -->
			<div id="ribbon">
				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Widgets</li>
				</ol>
			</div>
			<!-- END RIBBON -->

			<!-- MAIN CONTENT -->
			<div id="content">
				<div class="row">
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
						<h1 class="page-title txt-color-blueDark">
							<i class="fa fa-list-alt fa-fw "></i> 
							Widgets
							<span>>
							Smart Widgets
							</span>
						</h1>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
						<ul id="sparks" class="">
							<li class="sparks-info">
								<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
								<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
									1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
								</div>
							</li>
							<li class="sparks-info">
								<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
								<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
									110,150,300,130,400,240,220,310,220,300, 270, 210
								</div>
							</li>
							<li class="sparks-info">
								<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
								<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
									110,150,300,130,400,240,220,310,220,300, 270, 210
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						
						<div class="well">
							<button class="close" data-dismiss="alert">
									×
							</button>
							<h1><span class="semi-bold">Smart</span> <i class="ultra-light">Widgets</i> (aka JarvisWidgets) <sup class="badge bg-color-red bounceIn animated">v 2.0</sup> <br>
								<small class="text-danger slideInRight fast animated"><strong>Exclusive to SmartAdmin!</strong></small></h1>
							
							<p>The all new and revolutionary JarvisWidgets v2.0 (<strong>$35 value</strong>) is now only exclusive to SmartAdmin. 
								JarvisWidgets allows you to do more than your normal widgets. You can now use realtime 
								<a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="<span class=''>You can load content with ajax. You can even set a 'last updated' timestamp (customizable) a refresh button and set an auto refresh timer.</span>" data-html="true"> 
									AJAX loading </a> in a snap with auto refresh. 
								Add <a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="You can use 5 types of action buttons, toggle, edit, fullscreen, delete and custom button(s) which you can set for a custom action(s). You can even change the order of the action buttons. You can set a custom icon for every button. You can also add your own custom buttons, tabs, progress bars and more."> Infinite </a> buttons and controls to widget header. All widgets are 
								<a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="The Jarvis Widgets are sortable, on tablet and some phones. Dont want sortable widgets on tables/phones, no problem you can remove this."> Sortable</a> across all bootstrap col-spans and uses 
								<a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="This plugin gives you the option to let you save a couple of settings for example the position, color and title of the widget.">HTML5 localStorage</a>. Also now supports 
								<a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="This plugin is by default ltr, but it has a rtl option.">RTL Support</a>, 
								<a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="The Jarvis Widget works in every modern browser on windows, ios, osx, android, blackberry and windows phone.">Crosbrowser Support</a>, 
								<a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="The Jarvis Widget plugin has a couple of callback function wich you can use for several things, for example, use AJAX to store the data into a database.">Callback functions</a> and 
								<a href="javascript:void(0)" class="semi-bold" rel="popover-hover" data-placement="bottom" data-content="To give you more control you can set a lot of options per widget by using a dataset tag which will override the main plugin settings.">More</a>..</p>
							
						</div>

						
					</div>
				</div>

				<!-- widget grid -->
				<section id="widget-grid" class="">

					<!-- row -->
					<div class="row">
						
						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-0">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<h2><strong>Default</strong> <i>Widget</i></h2>				
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										<input class="form-control" type="text">
										<span class="note"><i class="fa fa-check text-success"></i> Change title to update and save instantly!</span>
										
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<p> Widget comes with a default 10 padding to the body which can be removed by adding the class <code>.no-padding</code> 
											to the <code>.widget-body</code> class. The default widget also comes with 5 widget buttons as displayed on top right 
											corner of the widget header. </p>
										<a href="javascript:void(0);" class="btn btn-default btn-lg"> <strong>Big</strong> <i>Button</i> </a>
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-blue" id="wid-id-1" data-widget-colorbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<h2><strong>Title</strong> <i>Change</i></h2>				
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										<input class="form-control" type="text">
										<span class="note"><i class="fa fa-check text-success"></i> Change title to update and save instantly!</span>
											
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<h3 class="alert alert-info"> Activate Options Button </h3>
										
										<code>data-widget-editbutton</code>						
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-greenLight" id="wid-id-3" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<h2><strong>Full</strong> <i>Screen</i></h2>				
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<h2 class="alert alert-success"> Make any widget full screen</h2>
										<code>data-widget-fullscreenbutton</code>
										<br><br>
										<p>Usefull when viewing images, gallery, tables with large data and maps. There are much useful applications to this method</p>	
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-red" id="wid-id-5" data-widget-colorbutton="false"	data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<h2><strong>Delete</strong> <i>Widget </i></h2>				
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<h6 class="alert alert-warning semi-bold">
											<i class="fa fa-times"></i> By deleting a widget you will <strong>remove</strong> the widget from the page and will need to connect the backend with the onevent handler to delete it from database.
										</h6>
										
										<code>data-widget-deletebutton</code>
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-7" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<h2><strong>Widget</strong> <i>Colors</i></h2>				
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<div class="row">
											
											<div class="col-md-6 col-lg-8">
												<h5><strong>Change</strong> and <i>save</i> widget <u>color</u></h5>
											
											<code>data-widget-colorbutton</code>
											<br>
												<br>
											<p>Change widget color at will and SmartAdmin will permanently remember the color of your chosen widget. 
											Do this to any widget in any page and SmartAdmin will keep track of all your widgets!</p>
											</div>
											<div class="col-md-6 col-lg-4">
												<img src="img/demo/widget-colorpicker.png" alt="widget colorpicker" class="pull-right hover-transparent img-responsive"> 
											</div>
											
										</div>
										
						
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-pink" id="wid-id-9" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
									<h2><strong>Label & Badges</strong> </h2>				
									<div class="widget-toolbar"> 
										<div class="label label-success">
											<i class="fa fa-arrow-up"></i> 2.35%
										</div>
									</div>
									<div class="widget-toolbar"> 
										<div class="badge bg-color-blue">
											99
										</div>
									</div>	
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<!-- widget toolbar -->
										<div class="widget-body-toolbar text-center">
											<div class="badge bg-color-purple">
												small badge
											</div>
											<div class="label label-warning">
												<i class="fa fa-check"></i> I am a big label
											</div>

										</div>
										<!-- end widget toolbar -->
										
										<!-- widget body text-->
										
											<p class="alert alert-info">
												
												Add label inside widget footer / toolbar
												
											</p>
										
										<!-- end widget body text-->
										
										<!-- widget footer -->
										<div class="widget-footer">
											<div class="badge bg-color-greenLight pull-left">
												13
											</div>
											<div class="label label-danger">
												<i class="fa fa-arrow-down"></i> -1.85%
											</div>
										</div>
										<!-- end widget footer -->
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-11" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<h2><strong>Tabs / Pills</strong> <i>Widget</i></h2>	
									
									<ul id="widget-tab-1" class="nav nav-tabs pull-right">

										<li class="active">

											<a data-toggle="tab" href="#hr1"> <i class="fa fa-lg fa-arrow-circle-o-down"></i> <span class="hidden-mobile hidden-tablet"> Tab 1 </span> </a>

										</li>

										<li>
											<a data-toggle="tab" href="#hr2"> <i class="fa fa-lg fa-arrow-circle-o-up"></i> <span class="hidden-mobile hidden-tablet"> Tab 2 </span></a>
										</li>

									</ul>	
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body no-padding">

										<!-- widget body text-->
										
										<div class="tab-content padding-10">
											<div class="tab-pane fade in active" id="hr1">
												
													<h4 class="alert alert-danger"> Insert tabs / pills to widget header </h4>
													I have six locks on my door all in a row. When I go out, I lock every other one. I figure no matter how long somebody stands there picking the locks, they are always locking three.
												
											</div>
											<div class="tab-pane fade" id="hr2">
												
													<h4 class="alert alert-warning"> Checkout the <a href="general-elements.html">General Elements</a> page for more tab options </h4>
													Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
												
											</div>
										</div>
										
										<!-- end widget body text-->
										
										<!-- widget footer -->
										<div class="widget-footer text-right">
											
											<span class="onoffswitch-title">
												<i class="fa fa-check"></i> Show Tabs
											</span>
											<span class="onoffswitch">
												<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-tabs" checked="checked">
												<label class="onoffswitch-label" for="show-tabs"> 
													<span class="onoffswitch-inner" data-swchon-text="True" data-swchoff-text="NO"></span> 
													<span class="onoffswitch-switch"></span> 
												</label> 
											</span>
									
										</div>
										<!-- end widget footer -->
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-13" 
								data-widget-load="ajax/demowidget.php" 
								data-widget-colorbutton="false" 
								data-widget-editbutton="false" 
								data-widget-togglebutton="false" 
								data-widget-deletebutton="false" 
								data-widget-fullscreenbutton="false" 
								data-widget-custombutton="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<h2><strong>Refresh</strong> <i>Widget</i></h2>	

								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">

										<!-- widget body text-->
										
											<p>This content will be replaced via ajax loader...</p>
										
										<!-- end widget body text-->
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

						</article>
						<!-- WIDGET END -->

						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<span class="widget-icon"> <i class="fa fa-arrows-v"></i> </span>
									<h2 class="font-md"><strong>Collapsable</strong> <i>Widget</i></h2>				
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->

									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<h2 class="alert alert-warning"> This widget is opened by default </h2>
										<code>data-widget-togglebutton</code>
										<br><br>
										<p>Notice the header text size slightly larger than other widget headers</p>
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->
							
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-4" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-collapsed="true">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<span class="widget-icon"> <i class="fa fa-arrows-v"></i> </span>
									<h2><strong><i>Collapsed </i></strong><small>Widget</small> </h2>				
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<h2 class="alert alert-warning"> This widget is collapsed by default </h2>
										
										<code>data-widget-collapsed</code>
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-purple" id="wid-id-6" data-widget-colorbutton="false" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-deletebutton="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<h2><strong>Progress</strong> <i>bars</i> </h2>				
									<div class="widget-toolbar"> 
										
											<div class="progress progress-striped active" rel="tooltip" data-original-title="55%" data-placement="bottom">
												<div class="progress-bar progress-bar-success" role="progressbar" style="width: 55%">55 %</div>
											</div>
										
									</div>
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body no-padding">
										
										<div class="widget-body-toolbar">

												<div class="btn-group">
													<button type="button" class="btn btn-default">
														<i class="fa fa-bold"></i>
													</button>
													<button type="button" class="btn btn-default">
														<i class="fa fa-italic"></i>
													</button>
													<button type="button" class="btn btn-default">
														<i class="fa fa-underline"></i>
													</button>
												</div>

												<div class="btn-group">
													<button type="button" class="btn btn-default">
														<i class="fa fa-align-left"></i>
													</button>
													<button type="button" class="btn btn-default">
														<i class="fa fa-align-center"></i>
													</button>
													<button type="button" class="btn btn-default">
														<i class="fa fa-align-right"></i>
													</button>
													<button type="button" class="btn btn-default">
														<i class="fa fa-align-justify"></i>
													</button>
												</div>

										</div>
										<textarea class="form-control no-border" placeholder="Textarea" rows="4"> This is a textarea - below me is widget footer and above is the widget toolbar!</textarea>
										<div class="widget-footer">

											<button class="btn btn-sm btn-primary" type="button">
												Save
											</button>		
											
											<button class="btn btn-sm btn-danger disabled pull-left" type="button">
												Delete
											</button>	
											
										</div>
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-blueLight" id="wid-id-8" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false"> 
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<span class="widget-icon"> <i class="fa fa-hand-o-up"></i> </span>
									<h2><strong>Widget</strong> <i>buttons</i></h2>		
											
									<div class="widget-toolbar">
										<a href="javascript:void(0);" class="btn btn-primary">Btn</a>
									</div>
									<div class="widget-toolbar">
										
										
										<div class="btn-group" data-toggle="buttons">
									        <label class="btn btn-default btn-xs active">
									          <input type="radio" name="style-a1" id="style-a1"> <i class="fa fa-play"></i>
									        </label>
									        <label class="btn btn-default btn-xs">
									          <input type="radio" name="style-a2" id="style-a2"> <i class="fa fa-pause"></i>
									        </label>
									        <label class="btn btn-default btn-xs">
									          <input type="radio" name="style-a2" id="style-a3"> <i class="fa fa-stop"></i>
									        </label>
									    </div>
									</div>
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<h4 class="alert alert-info"> Insert buttons to header manually or dynamically </h4>
										
										
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-orange" id="wid-id-10" data-widget-colorbutton="false" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-deletebutton="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<h2><strong>With</strong> <i>Paging</i> </h2>				
									<div class="widget-toolbar"> 
										
									<ul class="pagination pagination-xs">
										<li class="disabled">
											<a href="javascript:void(0);">Prev</a>
										</li>
										<li class="active">
											<a href="javascript:void(0);">1</a>
										</li>
										<li>
											<a href="javascript:void(0);">2</a>
										</li>
										<li>
											<a href="javascript:void(0);">3</a>
										</li>
										<li>
											<a href="javascript:void(0);">Next</a>
										</li>
									</ul>
									</div>
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body no-padding">
										
										<p class="alert alert-success"> <strong><i class="fa fa-check"></i> Alert</strong> without body padding... </p>
										
										<p class="padding-10"> Notice this widget body has no padding!</p>
										
										<div class="widget-footer">

											<button class="btn btn-sm btn-success disabled" type="button">
												Previous
											</button>	
														
											<button class="btn btn-sm btn-success" type="button">
												Next
											</button>	
											
										</div>
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-12" data-widget-colorbutton="false" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-deletebutton="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<span class="widget-icon"> <i class="fa fa-arrow-down"></i> </span>
									<h2><strong>Widget</strong> <i><u>with</u> Dropdown</i> </h2>				
									<div class="widget-toolbar">
										
										<div class="btn-group">
											<button class="btn dropdown-toggle btn-xs btn-warning" data-toggle="dropdown">
												Dropdown <i class="fa fa-caret-down"></i>
											</button>
											<ul class="dropdown-menu pull-right">
												<li>
													<a href="javascript:void(0);">Option 1</a>
												</li>
												<li>
													<a href="javascript:void(0);">Option 2</a>
												</li>
												<li>
													<a href="javascript:void(0);">Option 3</a>
												</li>
											</ul>
										</div>
									</div>
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										Add dropdowns to header with ease. Making sure to add btn-xs class when using dropdowns on the widget header.
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-14" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false"> 
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<h2><strong>Widget</strong><i> Switch</i> </h2>		
											
									<div class="widget-toolbar" id="switch-1">
										<span class="onoffswitch-title"><i class="fa fa-location-arrow"></i> Style 1</span>
										<span class="onoffswitch">
											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
											<label class="onoffswitch-label" for="myonoffswitch"> 
												<span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> 
												<span class="onoffswitch-switch"></span> </label> 
											</span>
									</div>
									
									<div class="widget-toolbar" id="switch-2" style="display:none">
										<div class="smart-form">
											<label class="toggle">
												<input type="checkbox" id="demo-switch-to-pills" name="checkbox-toggle">
												<i data-swchon-text="ON" data-swchoff-text="OFF"></i>
												<em class="fa fa-location-arrow"></em> Style 2</label>
										</div>
									</div>
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<h4 class="alert alert-info"> Insert switches to widget header </h4>
										
										<div class="btn-group" data-toggle="buttons">
											
									        <label class="btn btn-default btn-sm active">
									          <input type="radio" name="checkbox-style" id="checkbox-style-1" value="switch-1"> <strong>Switch</strong> <i>Style 1</i>
									        </label>
									        
									        <label class="btn btn-default btn-sm">
									          <input type="radio" name="checkbox-style" id="checkbox-style-2" value="switch-2"> <strong>Switch</strong> <i>Style 2</i>
									        </label>
									        
									    </div>		
										
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-16" data-widget-sortable="false" data-widget-colorbutton="false" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-deletebutton="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<span class="widget-icon"> <i class="fa fa-lock"></i> </span>
									<h2><strong>Locked</strong> <i>Widget</i> </h2>				
										<div class="widget-toolbar smart-form">
											
											<label class="input"> <i class="icon-append fa fa-question-circle"></i>
													<input type="text" placeholder="Focus to view the tooltip">
													<b class="tooltip tooltip-top-right">
														<i class="fa fa-warning txt-color-teal"></i> 
														Some helpful information</b> 
											</label>

										</div>
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<p class="alert alert-success"> <i class="fa fa-lock"></i> Locked widgets lock the widget to the base grid (<i>you will not be able to drag this widget</i> ). This also allows you to append and use input text elmenets on the widget header. </p>
										<code>data-widget-sortable="<strong>false</strong>"</code>
									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-18" data-widget-colorbutton="false" data-widget-editbutton="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<h2><strong>Fixed</strong> <i>Height</i></h2>				
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										<input class="form-control" type="text">
										<span class="note"><i class="fa fa-check text-success"></i> Change title to update and save instantly!</span>
										
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body no-padding">
										<div class="widget-body-toolbar">
											
											<div class="row">
												
												<div class="col-xs-9 col-sm-5 col-md-5 col-lg-5">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-search"></i></span>
														<input class="form-control" id="prepend" placeholder="Filter" type="text">
													</div>
												</div>
												<div class="col-xs-3 col-sm-7 col-md-7 col-lg-7 text-right">
													
													<button class="btn btn-success">
														<i class="fa fa-plus"></i> <span class="hidden-mobile">Add New Row</span>
													</button>
													
												</div>
												
											</div>
											
												

										</div>
										
										<div class="custom-scroll table-responsive" style="height:290px; overflow-y: scroll;">
											

											<table class="table table-bordered">
												<thead>
													<tr>
														<th><i class="fa fa-key text-warning"></i> License Key</th>
														<th>Username <i class="text-danger">!</i></th>
														<th>Date</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>C87E48EF-605A-B4FF</td>
														<td>erat@montesnasceturridiculus.org</td>
														<td>10/03/13</td>
													</tr>
													<tr>
														<td>5DDA79E7-890F-064D</td>
														<td>Nunc.lectus@ipsum.co.uk</td>
														<td>28/12/13</td>
													</tr>
													<tr>
														<td>468459AA-7933-C017</td>
														<td>vitae.mauris.sit@tempordiamdictum.net</td>
														<td>25/02/14</td>
													</tr>
													<tr>
														<td>C3006C18-4677-D2CE</td>
														<td>nec.urna.suscipit@acrisusMorbi.edu</td>
														<td>06/07/14</td>
													</tr>
													<tr>
														<td>E535C188-FDF4-90CB</td>
														<td>lobortis@pedeacurna.com</td>
														<td>28/12/12</td>
													</tr>
													<tr>
														<td>95489E95-9602-18B7</td>
														<td>egestas.lacinia.Sed@In.ca</td>
														<td>17/07/14</td>
													</tr>
													<tr>
														<td>D34E6661-D81A-9328</td>
														<td>arcu@lectus.ca</td>
														<td>14/10/14</td>
													</tr>
													<tr>
														<td>C72D2C04-458F-EBD0</td>
														<td>ut.pharetra.sed@vulputatevelit.net</td>
														<td>30/04/14</td>
													</tr>
													<tr>
														<td>10CAFA5C-AB4B-8B45</td>
														<td>arcu.eu.odio@Duis.co.uk</td>
														<td>14/02/13</td>
													</tr>
													<tr>
														<td>AA4F5CBA-1CE8-85B7</td>
														<td>nec@rutrum.net</td>
														<td>06/02/14</td>
													</tr>
													<tr>
														<td>2D816071-8F99-B315</td>
														<td>Praesent.luctus.Curabitur@elementum.ca</td>
														<td>27/09/13</td>
													</tr>
													<tr>
														<td>41BDB60C-C6EA-54EB</td>
														<td>Nunc.sed.orci@sitamet.org</td>
														<td>18/11/13</td>
													</tr>
													<tr>
														<td>43F3D48B-FEF3-776E</td>
														<td>eu.erat@nequevitaesemper.com</td>
														<td>23/04/13</td>
													</tr>
													<tr>
														<td>2521899F-79B9-B309</td>
														<td>mattis.velit@risusQuisque.ca</td>
														<td>04/07/13</td>
													</tr>
													<tr>
														<td>D08994C9-DCB1-948B</td>
														<td>Proin@metusAliquam.net</td>
														<td>27/07/13</td>
													</tr>
													<tr>
														<td>7AD2C774-36BA-0B2B</td>
														<td>tincidunt@Lorem.com</td>
														<td>01/07/14</td>
													</tr>
													<tr>
														<td>162C0373-FF3B-2469</td>
														<td>ante.dictum.cursus@ultrices.org</td>
														<td>10/02/13</td>
													</tr>
													<tr>
														<td>05641987-3D48-DD72</td>
														<td>lorem.ut.aliquam@Sednecmetus.org</td>
														<td>16/08/14</td>
													</tr>
													<tr>
														<td>3A173E5A-192A-0D5D</td>
														<td>nunc.risus@vitae.org</td>
														<td>04/04/13</td>
													</tr>
													<tr>
														<td>67081066-E0B5-9E37</td>
														<td>lectus@sed.org</td>
														<td>10/12/14</td>
													</tr>
													<tr>
														<td>C677C05F-7D98-C3E9</td>
														<td>auctor.quis@Morbi.org</td>
														<td>30/03/13</td>
													</tr>
													
													
												</tbody>
											</table>
										
										</div>
										
										
									
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

						<div class="col-sm-12">
							<div class="well">
								<h1>Basic Usage</h1>
								
								<div class="alert alert-info">
									Note: You must delete the data-attribute* associated in order to act as true. For example <code> data-widget-togglebutton="true"</code> will still act as <code>false</code>, you must remove the <strong>data-attribute</strong> for the statement to be true.
								</div>
								
								<table class="table table-bordered">
				                        <thead>
				                            <tr>
				                                <th style="width:25%">HTML5 data attributes / CSS / HTML</th>
				                                <th style="width:15%">Place after</th>
				                                <th style="width:15%">Example value(s)</th>
				                                <th style="width:45%">Desctription</th>
				                            </tr>                                            
				                        </thead> 
				                        <tbody>
				                            <tr>
				                                <td>data-widget-sortable</td>
				                                <td><code>header</code></td>
				                                <td>false</td>
				                                <td>Prevent a widget from being sortable <i>(can only be used with the value 'false')</i>.</td>
				                            </tr>
				                            <tr>
				                                <td>data-widget-icon</td>
				                                <td><code>.jarviswidget</code></td>
				                                <td>fa fa-trash</td>
				                                <td>Use a icon in the widgets header <i>(see icons section for all list of icons)</i>.</td>
				                            </tr>
				                            <tr>
				                                <td>data-widget-togglebutton</td>
				                                <td><code>.jarviswidget</code></td>
				                                <td>false</td>
				                                <td>Prevent a widget from having a toggle button <i>(can only be used with the value 'false')</i>.</td>
				                            </tr>
				                            <tr>
				                                <td>data-widget-deletebutton</td>
				                                <td><code>.jarviswidget</code></td>
				                                <td>false</td>
				                                <td>Prevent a widget from having a delete button <i>(can only be used with the value 'false')</i>.</td>
				                            </tr>
				                            <tr>
				                                <td>data-widget-editbutton</td>
				                                <td><code>.jarviswidget</code></td>
				                                <td>false</td>
				                                <td>Prevent a widget from having a edit button <i>(can only be used with the value 'false')</i>.</td>
				                            </tr> 
				                            <tr>
				                                <td>data-widget-fullscreenbutton</td>
				                                <td><code>.jarviswidget</code></td>
				                                <td>false</td>
				                                <td>Prevent a widget from having a fullscreen button <i>(can only be used with the value 'false')</i>.</td>
				                            </tr> 
				                            <tr>
				                                <td>data-widget-load</td>
				                                <td><code>.jarviswidget</code></td>
				                                <td>widget-ajax.php</td>
				                                <td>The file that is loaded with ajax.</td>
				                            </tr>                                                  
				                            <tr>
				                                <td>data-widget-refresh</td>
				                                <td><code>.jarviswidget</code></td>
				                                <td>10</td>
				                                <td>Seconds to refresh a ajax file <i>(see 'data-widget-load')</i>.</td>
				                            </tr> 
				                            <tr>
				                                <td>data-widget-refreshbutton</td>
				                                <td><code>.jarviswidget</code></td>
				                                <td>false</td>
				                                <td>Prevent a ajax widget from showing a refresh button <i>(can only be used with the value 'false')</i>.</td>
				                            </tr> 
				                            <tr>
				                                <td>data-widget-hidden</td>
				                                <td><code>.jarviswidget</code></td>
				                                <td>true</td>
				                                <td>Hide a widget at load <i>(can only be used with the value 'true')</i>.</td>
				                            </tr> 
				                            <tr>
				                                <td> data-widget-colorbutton</td>
				                                <td><code>.jarviswidget</code></td>
				                                <td>false</td>
				                                <td>This is active by default, set it to false to hide.</td>
				                            </tr>                                                                                           
				                            <tr>
				                                <td>data-widget-collapsed</td>
				                                <td><code>.jarviswidget</code></td>
				                                <td>false</td>
				                                <td>Collapse a widget upon load <i>(can only be used with the value 'true')</i>. This will allways be collapsed every page load.</td>
				                            </tr>                                                 
				                            <tr>
				                                <td>data-widget-grid</td>
				                                <td><code>article</code></td>
				                                <td>false</td>
				                                <td>You can exclude grids from being a sortable/droppable area, this means that all widgets in this area will work, but cant be sortable/droppable and that all other
				                                widgets cant be dropped in this area. Add this attribute <i>(can only be used with the value 'false')</i> to a grid element.</td>
				                            </tr>      
				                            <tr>
				                                <td><code>.no-padding</code></td>
				                                <td><code>.widget-body</code></td>
				                                <td>n/a</td>
				                                <td>Removes all padding inside widget body</td>
				                            </tr>       
				                            <tr>
				                                <td><code>.well</code></td>
				                                <td><code>.jarviswidget</code></td>
				                                <td>n/a</td>
				                                <td>Converts a widget to a well</td>
				                            </tr>                                                                                                                                         
				                        </tbody>
				                        <tfoot>
				                             <tr>
				                                <td colspan="4">These HTML5 attributes are used as individual widget options. Main options can be changed in the widgets plugin it self. 
				                                Notice: data attributes can only have 1 boolan value(see above)!
				                                </td>
				                             </tr>
				                        </tfoot>  
				                    </table>
							
								
							</div>

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
		<div class="page-footer">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<span class="txt-color-white">SmartAdmin 1.9.X <span class="hidden-xs"> - Web Application Framework</span> © 2017-2019</span>
				</div>

				<div class="col-xs-6 col-sm-6 text-right hidden-xs">
					<div class="txt-color-white inline-block">
						<i class="txt-color-blueLight hidden-mobile">Last account activity <i class="fa fa-clock-o"></i> <strong>52 mins ago &nbsp;</strong> </i>
						<div class="btn-group dropup">
							<button class="btn btn-xs dropdown-toggle bg-color-blue txt-color-white" data-toggle="dropdown">
								<i class="fa fa-link"></i> <span class="caret"></span>
							</button>
							<ul class="dropdown-menu pull-right text-left">
								<li>
									<div class="padding-5">
										<p class="txt-color-darken font-sm no-margin">Download Progress</p>
										<div class="progress progress-micro no-margin">
											<div class="progress-bar progress-bar-success" style="width: 50%;"></div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="padding-5">
										<p class="txt-color-darken font-sm no-margin">Server Load</p>
										<div class="progress progress-micro no-margin">
											<div class="progress-bar progress-bar-success" style="width: 20%;"></div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="padding-5">
										<p class="txt-color-darken font-sm no-margin">Memory Load <span class="text-danger">*critical*</span></p>
										<div class="progress progress-micro no-margin">
											<div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="padding-5">
										<button class="btn btn-block btn-default">refresh</button>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE FOOTER -->

		<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
		Note: These tiles are completely responsive,
		you can add as many as you like
		-->
		<div id="shortcut">
			<ul>
				<li>
					<a href="inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
				</li>
				<li>
					<a href="calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
				</li>
				<li>
					<a href="gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
				</li>
				<li>
					<a href="invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
				</li>
				<li>
					<a href="gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
				</li>
				<li>
					<a href="profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
				</li>
			</ul>
		</div>
		<!-- END SHORTCUT AREA -->


		

		<script>		
		// DO NOT REMOVE : GLOBAL FUNCTIONS!		
			$(document).ready(function() {			
				pageSetUp();			
				// PAGE RELATED SCRIPTS
			
				// switch style change
				$('input[name="checkbox-style"]').change(function() {
					//alert($(this).val())
					$this = $(this);
			
					if ($this.attr('value') === "switch-1") {
						$("#switch-1").show();
						$("#switch-2").hide();
					} else if ($this.attr('value') === "switch-2") {
						$("#switch-1").hide();
						$("#switch-2").show();
					}
			
				}); 
				
				// tab - pills toggle
				$('#show-tabs').click(function() {
					$this = $(this);
					if($this.prop('checked')){
						$("#widget-tab-1").removeClass("nav-pills").addClass("nav-tabs");
					} else {
						$("#widget-tab-1").removeClass("nav-tabs").addClass("nav-pills");
					}
					
				});			
			});
		</script>

	</body>

</html>