<?php
	session_start(); // Start our session if it hasn't been
	
	if(!isset($_SESSION['loggedIn'])){
		
		$_SESSION['loggedIn'] = 0;
		$_SESSION['accessLevel'] = 0;
		$_SESSION['username'] = 'Anonymous';
		$failed = 0;
		
	} else {
	
			
	}

	
	// Check to see if the user has attempted a login or if  it's there first time visiting this page
	if( $_SESSION['loggedIn'] == 0 && ($_POST['username'] != "" || $_POST['password'] != "")){
	
		// If so, include the db_connect for querying the database
		include('dbconnect.php');
		
		// Declare some variables we'll need 
		
		// The hashing algorithm we'll use for passwords
		$algo = 'sha256';
		
		// The username from the http_POST array
		$username = $_POST['username'];
		
		// The hashed version of the password from the $_POST array
		$password = hash($algo , $_POST['password']);
		
		// Build the query string we'll use
		$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		// Query the DB and store the result in $result
		$result = mysqli_query($db, $query);

		// Count the rows in the result set to see if we got a match or not
		$row_cnt = mysqli_num_rows($result);
		
		// If we have a match, which should only be one!!!
		if($row_cnt == 1) {

			// Set up the session variables we'll use throughout the site
			$_SESSION['username'] = $row['username'];
			$_SESSION['accessLevel'] = $row['permission'];
			$_SESSION['loggedIn'] = 1;
			
			// Finally, redirect the user back to the index.html page ;)
			header('Location: index.html');
			
		} else {

			// If we get here, that means we somehow have > 1 matches or 0 matches			
				
			// So set the session variables to defaults, just in case;
			$_SESSION['username'] = "";
			$_SESSION['accessLevel'] = 0;
			$_SESSION['loggedIn'] = 0;
			
			$failed = 1;
			
			
			// And redirect them back to here again
			//header('Location: login.php');
		}
		
		
	} else {
	
		// If this is their first time visiting the page, then we should just exit php mode
		
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
		<title>UMW Maintenance Login Page</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<noscript>
		<link rel="stylesheet" href="css/5grid/core.css" />
		<link rel="stylesheet" href="css/5grid/core-desktop.css" />
		<link rel="stylesheet" href="css/5grid/core-1200px.css" />
		<link rel="stylesheet" href="css/5grid/core-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />p
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
							<?php include 'includes/nav-bar.php'; ?>
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
				<div id="content" class="12u">
					
					<!-- Main Content Area -->
					<section>
						<h2 class="main-title">Login Page</h2>
						<!-- <a href="#" class="image-style1"><img src="images/pic02.jpg" alt=""></a> -->
						
						<div align="left">
						
							<div id="block">
							
								<div class="form">
									<form method="post" action="login.php">
									
									<?php if($failed == 1) { echo "<div class=\"warning\"><p>Wrong password, please try again.</p><p class=\"c\">&nbsp;</p></div>"; } ?>
									<input type="text" value="Username" name="username"/>
									<input type="password" value="*******" name="password"/>
									<p class="btn">
										<button type="submit" value="Login"/>Login</button>
									</p>
									</form>
									<ul class="nav-path">
										<!-- <li><a href="#">Forgot your password?</a></li>
										<li><a href="#">Create new account</a></li> -->
									</ul>
									<i class="ctop">&nbsp;</i>
									<i class="cbottom">&nbsp;</i>
								</div>
							</div>
						
					</div>

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
						<p>&copy; UMW Maintenance Database | Images: <a href="http://fotogrph.com/">Fotogrph</a> + <a href="http://iconify.it/">Iconify.it</a> | Design: <a href="http://html5templates.com/">HTML5Templates.com</a></p>
					</section>
				</div>
			</div>
		</div>


	</body>
</html>

<?php exit(); ?>