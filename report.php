<!DOCTYPE HTML>
<?php session_start(); ?>

<!--
	MegaCorp: A responsive HTML5 website template by HTML5Templates.com
	Released for free under the Creative Commons Attribution 3.0 license (html5templates.com/license)
	Visit http://html5templates.com for more great templates or follow us on Twitter @HTML5T
-->


<html>
	<head>
		<title>UMW Maintenance Problems</title>
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
						<h2 class="main-title">Submit Your Maintenance Problem</h2>
						
<!-- CONTENT -->
					<h3>Please Describe Your Maintenance Problem</h3>
                                       


					<form id="report" method="post" action="submitReport.php"> 

					<table>
					<tr><td>Building</td><td>
						<select id="building" name="building">
							<?php
									include "dbconnect.php";
									
									$query = "SELECT buildingId, buildingName FROM buildings";
									
									$result = mysqli_query($db, $query) or die("Can't connect to database!!!");
									
									while($row = mysqli_fetch_array($result)) {
										
										echo "<option value='" . $row['buildingId'] . "'> " . $row['buildingName'] . "</option>\n";	
										
									}							
							
							?>					
							
						
						
						</select>					
					
					
					
					</td></tr>
					<tr><td>Room</td><td><input type="text" id="Room" name="Room" /></td></tr>
					<tr><td>Report Date</td><td><input type="number" name="month" min="1" max="12" step="1" value="1" size="3"/>
					<input type="number" name="day" min="1" max="31" step="1" value="1" size="3"/>
					<input type="number" name="year" min="2013" max="2020" step="1" value="2013" size="4"/></td></tr>
					
					
										
					
					<tr><td>Description</td><td><input type="text" rows="5" columns="20" id="Description" name="Description" /></td></tr>
					
					<tr><td>&nbsp;</td><td><input type="submit" name="Report" value="Report" /></td></tr>
					</table>
					
					</form>
					<!-- END CONTENT -->



						<ul class="style5">
                                                  
							
						</ul>
						
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
						<p>&copy; UMW Maintenance Problems | Design: <a href="http://html5templates.com/">HTML5Templates.com</a></p>
					</section>
				</div>
			</div>
		</div>


	</body>
</html>