<?php 

	session_start();	
	
	if( ($_SESSION['loggedIn'] == 0 || isset($_SESSION['loggedIn']) == False ) || $_SESSION['accessLevel'] < 1) {

		header("Location: index.php");	
		
	}

?>

<!DOCTYPE HTML>

<!--
	MegaCorp: A responsive HTML5 website template by HTML5Templates.com
	Released for free under the Creative Commons Attribution 3.0 license (html5templates.com/license)
	Visit http://html5templates.com for more great templates or follow us on Twitter @HTML5T
-->


<html>
	<head>
		<title>MegaCorp by HTML5Templates.com</title>
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
							<?php include "includes/nav-bar.php"; ?>
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
				
				<!-- Sidebar Area -->
				<div id="sidebar" class="4u">
				
					<!-- Sidebar Section 1 -->
					<section id="box1">
						
						<!-- Two Column Content Area -->
						<div class="5grid">
							<div class="row">
								<div class="6u">
									<section>
										<h2>Admin Actions</h2>
										<ul class="style4">
											<li class="first"><a href="buildingsummary.php">Building Summary</a></li>
											<li><a href="Reports.php">View List of Reports</a></li>
											<li><a href="#">Donec metus sapien</a></li>
											<li><a href="#">Integer quis urna</a></li>
											<li><a href="#">Etiam rhoncus erat</a></li>
											<li><a href="#">Donec metus sapien</a></li>
											<li><a href="logout.php">Logout</a></li>
										</ul>
									</section>
								</div>
								<div class="6u">
									<section>
										<h2>Admin Actions</h2>
										<ul class="style4">
											<li class="first"><a href="#">Luctus sapien</a></li>
											<li><a href="#">Etiam rhoncus </a></li>
											<li><a href="#">Donec dictum metus </a></li>
											<li><a href="#">Integer gravida </a></li>
											<li><a href="#">Donec dictum </a></li>
											<li><a href="#">Integer quis urna</a></li>
											<li><a href="#">Etiam rhoncus erat</a></li>
										</ul>
									</section>
								</div>
							</div>
						</div>
						<!-- Two Column Content Area Ends Here -->
					
					</section>
	
					<!-- Sidebar Section 2 -->
					<section id="box2">
						<h2>Ipsum Consequat</h2>
						<ul class="style2">
							<li class="first">
								<p><a href="#"><img src="images/pics07.jpg" alt="">Pellentesque viverra vulputate enim. Aliquam erat volutpat. Donec leo, vivamus fermentum nibh in augue praesent congue rutrum. </a></p>
							</li>
							<li>
								<p><a href="#"><img src="images/pics08.jpg" alt="">Aliquam lacinia metus ut elit. Suspendisse iaculis mauris nec lorem. Donec leo, vivamus fermentum augue praesent congue rutrum.</a></p>
							</li>
							<li>
								<p><a href="#"><img src="images/pics09.jpg" alt="">Suspendisse sit amet tellus in eros bibendum condimentum. Donec leo, vivamus fermentum nibh in augue praesent a lacus congue rutrum. </a></p>
							</li>
							<li>
								<p><a href="#"><img src="images/pics10.jpg" alt="">Aliquam lacinia metus ut elit. Suspendisse iaculis mauris nec lorem. Donec leo, vivamus fermentum augue praesent congue rutrum.</a></p>
							</li>
						</ul>
						<a href="#" class="button button-style1">Read More</a>
					</section>


				</div>
				
				<!-- Content Area -->
				<div id="content" class="8u mobileUI-main-content">
					
					<!-- Main Content Area -->
					<section>
						<h2 class="main-title">Maintenance Admin Menu</h2>
						<a href="#" class="image-style1"><img src="images/pic02.jpg" alt=""></a>
						<p>This is the administration menu for the University of Mary Washington Maintenance Database. Here, as a maintenance member, you will be able to check off problems as resolved, change priorities of already reported problems, as well as other feature available to maintenance crew members.</p>
						
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
						<p>&copy; UMW Maintenance | Images: <a href="http://fotogrph.com/">Fotogrph</a> + <a href="http://iconify.it/">Iconify.it</a> | Design: <a href="http://html5templates.com/">HTML5Templates.com</a></p>
					</section>
				</div>
			</div>
		</div>

	</body>
</html>