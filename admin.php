<?php 

	session_start();	
	
	if( ($_SESSION['loggedIn'] == 0)) {

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
		<title>UMW Maintenance DB - Administration Menu</title>
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
							<h1><a href="index.php" class="mobileUI-site-name">UMW Maintenance</a></h1>
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
											<li><a href="Reports.php">View List of Reports</a></li>
											<li><a href="report.php">Submit a Report</a></li>
											<li><a href="changePriority.php">Change Priority</a></li>
											<li><a href="unresolved.php">Mark Report as Resolved</a></li>
											<li><a href="index.php">Goto Homepage</a></li>
											<li><a href="logout.php">Logout</a></li>
										</ul>
									</section>
								</div>
								
							</div>
						</div>
						<!-- Two Column Content Area Ends Here -->
					
					</section>
	
					<!-- Sidebar Section 2 -->
					<section id="box2">
						
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