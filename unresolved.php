<!DOCTYPE HTML>
<?php session_start(); ?>

<!--
	MegaCorp: A responsive HTML5 website template by HTML5Templates.com
	Released for free under the Creative Commons Attribution 3.0 license (html5templates.com/license)
	Visit http://html5templates.com for more great templates or follow us on Twitter @HTML5T
-->


<html>
	<head>
		<title>UMW Maintenance DB</title>
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
		<link  type="text/css" rel="stylesheet" href="css/350css.css" />
		</noscript>
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
		
<style type="text/css"><!--
reportList.table { 
  border-spacing:4;
  border: 2;
  border-collapse:collapse;
  padding: 8
}

reportList.td {

  cellpadding: 10;
  
	
}
--></style>
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
			<h2 class="main-title">Unresolved Reports</h2>
			<h3><a href="Reports.php">Back</a></h3>
			
						<!-- <a href="#" class="image-style1"><img src="images/pic02.jpg" alt=""></a> -->
						


		
		<div align="center">

			<?php
			
					include('dbconnect.php');
					$query = "SELECT r.ReportDate, r.Description,b.buildingName, rms.room FROM reports r JOIN rooms rms JOIN room_problems rp JOIN buildings b WHERE rp.report_id = r.id AND rp.room = rms.room AND rms.BuildingID = b.buildingId AND r.id NOT IN (SELECT id FROM resolved); ";
										
					$result = mysqli_query($db, $query) or die("Error Querying Database");
					
					echo "<table class='reportList' width='100%' align='center' padding='10'>";
					echo "<tr><th><h2>Date Reported:</h2></th><th><h2>Building:</h2></th><th><h2>Room:</h2></th><th><h2>Description:</h2></th></tr>";
					 while($row = mysqli_fetch_array($result)) {
					 	
						echo "<tr><td align='center'>" . $row['ReportDate'] . "</td><td align='center'>" .$row['buildingName'] .  "</td><td align='center'>" . $row['room'] . "</td><td align='center'>" . $row['Description'] . "</td></tr>";
						
						
					}	
					
					echo "</table>";
					
if($_SESSION['loggedIn']==1){
                                      echo"<form method=\"post\" action=\"markResolved.php\">" ;

					echo"<table>";
					
					echo"<tr><td>Problem ID</td><td><input type=\"number\" id=\"id\" name=\"id\" /></td></tr>";
				
					
					
					echo"<tr><td>Resolved Date</td><td><input type=\"number\" name=\"month\" min=\"1\" max=\"12\" step=\"1\" value=\"1\" size=\"3\"/>
					<input type=\"number\" name=\"day\" min=\"1\" max=\"31\" step=\"1\" value=\"1\" size=\"3\"/>
					<input type=\"number\" name=\"year\" min=\"2013\" max=\"2020\" step=\"1\" value=\"2013\" size=\"4\"/></td></tr>";
					
echo"<tr><td>&nbsp;</td><td><input type=\"submit\" name=\"Mark Resolved!\" value=\"Mark Resolved\" /></td></tr>";
					echo"</table>";
					
					echo"</form>"; 
					 
					}

					
			?>
	

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
						<p>&copy; UMW Maintenance | Images: <a href="http://fotogrph.com/">Fotogrph</a> + <a href="http://iconify.it/">Iconify.it</a> | Design: <a href="http://html5templates.com/">HTML5Templates.com</a></p>
					</section>
				</div>
			</div>
		</div>

	</body>
</html>
