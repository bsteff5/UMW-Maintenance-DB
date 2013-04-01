<!DOCTYPE HTML>

<!--
	MegaCorp: A responsive HTML5 website template by HTML5Templates.com
	Released for free under the Creative Commons Attribution 3.0 license (html5templates.com/license)
	Visit http://html5templates.com for more great templates or follow us on Twitter @HTML5T
-->
<?php
	session_start(); 
	// Start our session if it hasn't been
	
	if(!isset($_SESSION['loggedIn'])){
		
		$_SESSION['loggedIn'] = 0;
		$_SESSION['accessLevel'] = 0;
		$_SESSION['username'] = 'Anonymous';
		
	} else {
	
			
	}

?>

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
		
		<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=flat"></script>
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
							<?php include 'includes/nav-bar.php'; ?>
						</div>
					</div>
				</div>
			</header>
			
			<div id="banner" class="5grid-layout">
				<div class="row">
					<div class="12u">
						<section>
							<h2>UMW Maintenance DB</h2>
							<p>Hello, <?php echo $_SESSION['username']; ?>. <br/> Is that sink leaking again? Report your problems here man!!<br/></p>
							<a href="report.php" class="button button-style1">Read More</a>
						</section>
					</div>
				</div>
			</div>			

		</div>
		<!-- Header Ends Here -->

		<!-- Featured Area -->
			<div id="featured-wrapper">
			
				<div id="featured-content" class="5grid-layout">
					<div class="row">
					
						<div class="4u">
							<section>
								<h2>Wanna see the list?</h2>
								<img src="css/images/featured-icon01.png" width="91" height="68" alt="">
								<p>This is the list of all the reports we have. Here you will be able to see the top recent, recently resolved, and just reported. You can also see the full list of reports and filter them</p>
								<a href="Reports.php" class="button button-style1">Click Here</a>
							</section>
						</div>

						<div class="4u">
							<section>
								<h2>Wanna see some history?</h2>
								<img src="css/images/featured-icon02.png" width="91" height="68" alt="">
								<p>Here you can see some of the buildings that have had the most problems! Is it your dorm? Maybe it's your favorite building?</p>
								<a href="buildingsummary.php" class="button button-style1">Find Out!</a>
							</section>
						</div>

						<div class="4u">
							<section>
								<h2>Are You UMW Maintenance?</h2>
								<img src="css/images/featured-icon03.png" width="91" height="68" alt="">
								<p>If you are, you should login here and start fixing some stuff! Don't wait too long to start fixing stuff!</p>
								<a href="admin.php" class="button button-style1">Read More</a>
							</section>
						</div>
					
					</div>
				</div>
				
			</div>
		
		
		<!-- Featured Ends Here -->

		<!-- Wrapper -->
		<div id="wrapper" class="5grid-layout">
		
			<!-- Page Content -->
			<div id="page" class="row">
				
				<!-- Content Area -->
				<div id="content" class="8u">
					
					<!-- Main Content Area -->
					<section>
						<h2 class="main-title">What is the point of this site?</h2>
						<a href="#" class="image-style1"><img src="images/pic02.jpg" alt=""></a>
						<p>Well, if you think about it, it's a great idea. You can help UMW by submitting problems around campus, which will not only get them fixed faster but you'll get that warm feeling of helpfulness knowing you're helping out man!!</p>
						<a href="#" class="button button-style1">Read More</a>
					</section>
					
					
					<!-- Two Column Area -->
					<section>
						<div id="two-column" class="5grid">
							<div class="row">
								<div class="6u">
									
								</div>
							</div>
						</div>					
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
										<h2>Recently Resolved</h2>
										<ul class="style4">
											<li class="first"><a href="#">Maecenas luctus</a></li>
											<li><a href="#">Etiam rhoncus erat</a></li>
											<li><a href="#">Donec metus sapien</a></li>
											<li><a href="#">Integer quis urna</a></li>
											<li><a href="#">Etiam rhoncus erat</a></li>
											<li><a href="#">Donec metus sapien</a></li>
											<li><a href="#">Etiam volutpat erat</a></li>
										</ul>
									</section>
								</div>
								<div class="6u">
									<section>
										<h2>Just Reported</h2>
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
						<h2>Most Broken Buildings</h2>
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
