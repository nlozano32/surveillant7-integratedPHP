	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="icon" href="assets/img/damatexBall.png" sizes="16x16">
	<title>Damatex inc</title>

	
	

	<meta charset="utf-8">

	<!--=== CSS ===-->

	<!-- Bootstrap -->
	<link href="/surveillant7/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />


	<!-- jQuery UI -->
	<!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
	<![endif]-->


	<!-- Theme -->
	<link href="assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/weather-icons.css" rel="stylesheet" type="text/css">
	<link href="assets/css/weather-icons-wind.css" rel="stylesheet" type="text/css">




	<link rel="stylesheet" href="assets/css/fontawesome/font-awesome.min.css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
	<![endif]-->

	<!--[if IE 8]>
		<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'> -->

	<!--=== JavaScript ===-->

	<script type="text/javascript" src="assets/js/libs/jquery-1.10.2.min.js"></script>
	<link rel='stylesheet' type='text/css' href='css/jquery.dataTables.css'>
	<script src="js/vendor/jquery.sortelements.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="js/angular-route.js"></script>

	<script src="/surveillant7/app/app.js"></script>
							
	<script type="text/javascript" src="plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/libs/lodash.compat.min.js"></script>


		<!-- Forms -->
	<script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script> <!-- Styled radio and checkboxes -->
	<script type="text/javascript" src="plugins/select2/select2.min.js"></script> <!-- Styled select boxes -->
	<script type="text/javascript" src="plugins/fileinput/fileinput.js"></script>

	<!-- Form Validation -->
	<script type="text/javascript" src="plugins/validation/jquery.validate.min.js"></script>
	<script type="text/javascript" src="plugins/validation/additional-methods.min.js"></script>

	

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="assets/js/libs/html5shiv.js"></script>
	<![endif]-->

	<!-- Smartphone Touch Events -->
	<script type="text/javascript" src="plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="plugins/event.swipe/jquery.event.move.js"></script>
	<script type="text/javascript" src="plugins/event.swipe/jquery.event.swipe.js"></script>

	<!-- General -->
	<script type="text/javascript" src="assets/js/libs/breakpoints.js"></script>
	<script type="text/javascript" src="plugins/respond/respond.min.js"></script> <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
	<script type="text/javascript" src="plugins/cookie/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script>

	<!-- Page specific plugins -->
	<!-- Charts -->
	<script type="text/javascript" src="plugins/sparkline/jquery.sparkline.min.js"></script>

	<script type="text/javascript" src="plugins/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="plugins/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="plugins/blockui/jquery.blockUI.min.js"></script>



	<!-- Forms -->
	<script type="text/javascript" src="plugins/uniform/jquery.uniform.min.js"></script> <!-- Styled radio and checkboxes -->
	<script type="text/javascript" src="plugins/select2/select2.min.js"></script> <!-- Styled select boxes -->
	<script type="text/javascript" src="plugins/fileinput/fileinput.js"></script>

	<!-- Form Validation -->
	<script type="text/javascript" src="plugins/validation/jquery.validate.min.js"></script>
	<script type="text/javascript" src="plugins/validation/additional-methods.min.js"></script>
	<script type="text/javascript" src="js/jquery.confirm.js"></script>

	<script src="js/jquery.alerts.js" type="text/javascript"></script>
	<link href="assets/css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen">

	<!-- Noty -->
	<script type="text/javascript" src="plugins/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="plugins/noty/layouts/top.js"></script>
	<script type="text/javascript" src="plugins/noty/themes/default.js"></script>

	<!-- App -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<script type="text/javascript" src="assets/js/plugins.form-components.js"></script>



	<script>
	$(document).ready(function(){
		"use strict";

		App.init(); // Init layout and core plugins
		Plugins.init(); // Init all plugins
		FormComponents.init(); // Init all form-specific plugins
	});
	</script>

	<!-- Demo JS -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<script type="text/javascript" src="assets/js/demo/form_validation.js"></script>

		<!--Tables-->
	<script src="js/jquery.bdt.js" type="text/javascript"></script>
    <link href="css/jquery.bdt.css" type="text/css" rel="stylesheet"></link>


</head>

				
<body ng-app="myApp">




		 <!-- Header -->
  <header class="header navbar navbar-fixed-top" role="banner">
    <!-- Top Navigation Bar -->
    <div class="container">

      <!-- Only visible on smartphones, menu toggle -->
      <ul class="nav navbar-nav">
        <li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
      </ul>

      <!-- Logo -->
      <a class="navbar-brand" href="index.html">
        <img src="assets/img/damatexBall.png" alt="logoBall" style= "width:30px;height:30px;" />
        <img src="assets/img/damatexLegend.png" alt="logoBall" style= "width:130px;height:25px;" />
      </a>
      <!-- /logo -->

      <!-- Sidebar Toggler -->
      <a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
        <i class="icon-reorder"></i>
      </a>
      <!-- /Sidebar Toggler -->

      <!-- Top Right Menu -->
      <ul class="nav navbar-nav navbar-right">
    
        <!-- Tasks -->
        <li class="dropdown hidden-xs hidden-sm">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            
            <span class="username">The Watchdog</span>
          </a>
  
        </li>


        <!-- .row .row-bg Toggler -->
        <li>
          <a href="#" class="dropdown-toggle row-bg-toggle">
            <i class="icon-resize-vertical"></i>
          </a>
        </li>

        <!-- Project Switcher Button -->
        <li class="dropdown">
          <a href="#" class="project-switcher-btn dropdown-toggle">
            <i class=" icon-question-sign"></i>
            <span>Help</span>
          </a>
        </li>

        <!-- User Login Dropdown -->
        <li class="dropdown user">
          <a  class="dropdown-toggle" data-toggle="dropdown">
            <!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
            <!--<i class="icon-female"></i> -->
            <span class="username">Nancy Esperanza Lozano</span>
            <i class="icon-caret-down small"></i>
          </a>
          <ul class="dropdown-menu">
            
            <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
          </ul>
        </li>
        <!-- /user login dropdown -->
      </ul>
      <!-- /Top Right Menu -->
    </div>
    <!-- /top navigation bar -->

    <!--=== Project Switcher ===-->
    <div id="project-switcher" class="container project-switcher">
      <div id="scrollbar">
        <div class="handle"></div>
      </div>

      <div id="frame">
        <ul class="project-list">
          <li>
            <a href="javascript:void(0);">
              <span class="image"><i class="icon-desktop"></i></span>
              <span class="title">Lorem ipsum dolor</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <span class="image"><i class="icon-compass"></i></span>
              <span class="title">Dolor sit invidunt</span>
            </a>
          </li>
          <li class="current">
            <a href="javascript:void(0);">
              <span class="image"><i class="icon-male"></i></span>
              <span class="title">Consetetur sadipscing elitr</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <span class="image"><i class="icon-thumbs-up"></i></span>
              <span class="title">Sed diam nonumy</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <span class="image"><i class="icon-female"></i></span>
              <span class="title">At vero eos et</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <span class="image"><i class="icon-beaker"></i></span>
              <span class="title">Sed diam voluptua</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <span class="image"><i class="icon-desktop"></i></span>
              <span class="title">Lorem ipsum dolor</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <span class="image"><i class="icon-compass"></i></span>
              <span class="title">Dolor sit invidunt</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <span class="image"><i class="icon-male"></i></span>
              <span class="title">Consetetur sadipscing elitr</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <span class="image"><i class="icon-thumbs-up"></i></span>
              <span class="title">Sed diam nonumy</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <span class="image"><i class="icon-female"></i></span>
              <span class="title">At vero eos et</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);">
              <span class="image"><i class="icon-beaker"></i></span>
              <span class="title">Sed diam voluptua</span>
            </a>
          </li>
        </ul>
      </div> <!-- /#frame -->
    </div> <!-- /#project-switcher -->
  </header> <!-- /.header -->



	<div id="container">

		<div id="sidebar" class="sidebar-fixed">
			<div id="sidebar-content">



				<!-- Search Results -->
				<div class="sidebar-search-results">

					<i class="icon-remove close"></i>

					<!-- Persons -->
					<div class="title">
						Persons
					</div>
					
				</div> <!-- /.sidebar-search-results -->

				<!--=== Navigation ===-->
				<ul id="nav">
					<li class="current">
						<a href="#">
							<i class="icon-dashboard"></i>
							Dashboard
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-cog"></i>
							Control
							<!--<span class="label label-info pull-right">6</span>-->
						</a>
						<ul class="sub-menu">
							<li>
								<a href="#furnace">
								<i class="icon-angle-right"></i>
								Furnace [Deactivation]
								</a>
							</li>

						</ul>
					</li>


					<li>
						<a href="javascript:void(0);">
							<i class="icon-desktop"></i>
							Basic settings
							<!--<span class="label label-info pull-right">6</span>-->
						</a>
						<ul class="sub-menu">
							<li>
								<a href="#daily_period_standard">
								<i class="icon-angle-right"></i>
								Daily Periods [Standard]
								</a>
							</li>
							<li>
								<a href="#daily_period_standardInt">
								<i class="icon-angle-right"></i>
								Daily Periods [Integrated]
								</a>
							</li>
							<li>
								<a href="#output">
								<i class="icon-angle-right"></i>
								Outputs
								</a>
							</li>
							<li>
								<a href="#sensors">
								<i class="icon-angle-right"></i>
								Sensors
								</a>
							</li>
							<li>
								<a href="#virtual_sensors">
								<i class="icon-angle-right"></i>
								Virtual Sensors
								</a>
							</li>
							<li>
								<a href="#cumul_sensors">
								<i class="icon-angle-right"></i>
								Cumulative Sensors
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-edit"></i>
							Services
						</a>
						<ul class="sub-menu">
							<li>
								<a href="#global">
								<i class="icon-angle-right"></i>
								Global
								</a>
							</li>
							<li>
								<a href="#service_man">
								<i class="icon-angle-right"></i>
								With Sensors
								</a>
							</li>
							<li>
								<a href="#service_cas_zon">
								<i class="icon-angle-right"></i>
								With Sensors [Cascade]
								</a>
							</li>
							<li>
								<a href="#service_pid">
								<i class="icon-angle-right"></i>
								PID
								</a>
							</li>
							<li>
								<a href="#service_pid_cas_zone">
								<i class="icon-angle-right"></i>
								PID [Cascade]
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-bell"></i>
							Alarms
						</a>
						<ul class="sub-menu">
							<li>
								<a href="#/alarms_global">
								<i class="icon-angle-right"></i>
								Global
								</a>
							</li>
							<li>
								<a href="#/configurations">
								<i class="icon-angle-right"></i>
								Configurations
								</a>
							</li>
							<li>
								<a href="#alarms">
								<i class="icon-angle-right"></i>
								Alarms
								</a>
							</li>

							<li>
								<a href="#alarms_hist_gen">
								<i class="icon-angle-right"></i>
								Alarm History [Generated]
								</a>
							</li>
							<li>
								<a href="#alarms_hist_sent">
								<i class="icon-angle-right"></i>
								Alarm History [Sent]
								</a>
							</li>
						</ul>
					</li>
					
					<li>
						<a href="#irri_fix_time">
							<i class="wi wi-raindrops"></i>
							Irrigation 4
						</a>
					</li>
					<li>
						<a href="#limits">
							<i class="icon-stop"></i>
							Limits
						</a>
						<ul class="sub-menu">
							<li>
								<a href="#limit">
								<i class="icon-angle-right"></i>
								Limits Groups
								</a>
							</li>
							<li>
								<a href="#global_limit">
								<i class="icon-angle-right"></i>
								Global limit
								</a>
							</li>	
						</ul>
					</li>
					<li>
						<a href="#display">
							<i class="icon-bar-chart"></i>
							Display
						</a>
						<ul class="sub-menu">
							<li>
								<a href="#site_display">
								<i class="icon-angle-right"></i>
								Site Display
								</a>
							</li>
							<li>
								<a href="#graphics">
								<i class="icon-angle-right"></i>
								Graphics
								</a>
							</li>	
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class=" icon-question-sign"></i>
							Help
						</a>
					</li>
					<li>
						<a href="login.html">
							<i class="icon-key"></i>
							Log out
						</a>
					</li>


						</ul>
					</li>
				</ul>
				
				<div class="sidebar-widget align-center">
					<div class="btn-group" data-toggle="buttons" id="theme-switcher">
						<label class="btn active">
							<input type="radio" name="theme-switcher" data-theme="bright"><i class="icon-sun"></i> Bright
						</label>
						<label class="btn">
							<input type="radio" name="theme-switcher" data-theme="dark"><i class="icon-moon"></i> Dark
						</label>
					</div>
				</div>

			</div>
			<div id="divider" class="resizeable"></div>
		</div>
		<!-- /Sidebar -->

		<div id="content">
			<div class="container">
				<!-- Breadcrumbs line -->
				<div class="crumbs">
					<ul id="breadcrumbs" class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="#">Dashboard</a>
						</li>
					</ul>



					<ul class="crumb-buttons">
						<li><a href="index.html" title=""><i class="icon-signal"></i><span>Graphics</span></a></li>
					</ul>
				</div>
				<!-- /Breadcrumbs line -->


					
				<!--=== Page Content ===-->

						<div ng-view></div>

						<?php 
	
							include_once 'conexion/conexion.php';
							include_once 'modules/surveillantCrud.php';

						?>
							
					<!-- /Example Box -->
			

				<!--=== Statboxes ===-->


				

			<!-- /.container -->




		</div>


	</div>

	

</body>
</html>