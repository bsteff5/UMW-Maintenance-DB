<!DOCTYPE HTML>

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
							<h1><a href="#" class="mobileUI-site-name">UMW Maintenance Problems</a></h1>
						</div>
						<div class="8u" id="menu">
							<nav class="mobileUI-site-nav">
								<ul>
									<li><a href="index.html">Homepage</a></li>
									<li><a href="twocolumn1.html">Two Column #1</a></li>
									<li><a href="twocolumn2.html">Two Column #2</a></li>
									<li class="current_page_item"><a href="onecolumn.html">One Column</a></li>
								</ul>
							</nav>
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
                                       


				

					<table>
					<tr><td>Building</td><td><input type="text" id="Building" name="Building" /></td></tr>
					<tr><td>Floor</td><td><input type="text" id="Floor" name="Floor" /></td></tr>
					<tr><td>Room</td><td><input type="text" id="Room" name="Room" /></td></tr>
					<tr><td>Report Date</td><td><input type="number" name="month" min="1" max="12" step="1" value="1" size="3"/>
					<input type="number" name="day" min="1" max="31" step="1" value="1" size="3"/>
					<input type="number" name="year" min="2013" max="2020" step="1" value="2011" size="4"/></td></tr>
					
					
										
					
					<tr><td>Description</td><td><input type="text" id="Description" name="Description" /></td></tr>
					
					<tr><td>&nbsp;</td><td><input type="submit" name="Report" value="Report" /></td></tr>
					</table>
					
					</form>
					<!-- END CONTENT -->

<?php
include('dbconnect.php');				
 				if(isset($_POST['Report'])) { 
				   echo"asdasdsd";
				$q = mysql_query("INSERT INTO reports (keys) VALUES ('$values')")or die(mysql_error()); 
				if($q) { 
					echo "successful"; 
				}else { 
					echo "error"; 
				} 
				} 


              	
	       $query = "SELECT * FROM reports;
               $result = mysqli_query($db, $query)
                         or die("Error Querying Database");
    while($row = mysqli_fetch_array($result)) {
  		$id = $row['id'];
  	echo "$id"\n;
  }                 
                         
                         
                         
    mysqli_close($db);

?>



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