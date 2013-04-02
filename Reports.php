<!DOCTYPE HTML>
<?php session_start(); ?>

<!--
	MegaCorp: A responsive HTML5 website template by HTML5Templates.com
	Released for free under the Creative Commons Attribution 3.0 license (html5templates.com/license)
	Visit http://html5templates.com for more great templates or follow us on Twitter @HTML5T
-->


<html>
	<head>
		<title> UMW Maintenance DB </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<noscript>
		<link rel="stylesheet" href="css/5grid/core.css" />
		<link rel="stylesheet" href="css/5grid/core-desktop.css" />
		<link rel="stylesheet" href="css/5grid/core-1200px.css" />
		<link rel="stylesheet" href="css/5grid/core-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
		<div id="header-wrapper">
		
			<header id="header">
				<div class="5grid-layout">
					<div class="row">
						<div class="4u" id="logo">
							<h1><a href="#" class="mobileUI-site-name">UMW Maintenance</a></h1>
						</div>
						<div class="8u" id="menu">
						
						<?php include('includes/nav-bar.php'); ?>
						</div>
					</div>
				</div>
			</header>
			
		</div>
		<!-- Header Ends Here -->


		<!-- Wrapper -->
		<div id="wrapper" class="5grid-layout">
		
			<!-- Page Content -->
			<div id="page" class="row">
				
				<!-- Content Area -->
				<div id="content" class="8u">
					
					<!-- Main Content Area -->
					<section>
						<h2 class="main-title">Maintenance Reports </h2>
						<a href="#" class="image-style1"><img src="images/Trinkle.jpg" alt=""></a>
						
					</section>
					
				</div>
	
				<!-- Sidebar Area -->
				<div id="sidebar" class="4u">
				
					<!-- Sidebar Section 1 -->
					<section id="box1">
						
						<!-- Two Column Content Area -->
						<div class="5grid">
							<div class="row">
								<div class="6u">
									<section>
										<h2>Report Lists</h2>
										<ul class="style4">
											<li class="first"><a href="currentReports.php">Current Reports</a></li>
											<li class="first"><a href="resolved.php">Resolved Reports</a></li>
											<li class="first"><a href="unresolved.php">Unresolved Reports</a></li>
										</ul>
									</section>
								</div>
							</div>
						</div>
						<!-- Two Column Content Area Ends Here -->
					
					</section>
	
					<!-- Sidebar Section 2 -->
					<section id="box2">
						<a href="FullList.php" class="button button-style1">View All</a>
					</section>


				</div>
				
			</div>
			<!-- Page Content -->
		
		</div>
		<!-- Wrapper Ends Here -->


		<!-- Copyright -->
		<div class="5grid-layout" id="copyright">
			<div class="row">
				<div class="12u">
					<section>
						<p>&copy; UMW Maintenace | Images: <a href="http://fotogrph.com/">Fotogrph</a> + <a href="http://iconify.it/">Iconify.it</a> | Design: <a href="http://html5templates.com/">HTML5Templates.com</a></p>
					</section>
				</div>
			</div>
		</div>

	</body>
</html>
