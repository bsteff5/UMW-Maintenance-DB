<?php 

//session_start();
						
						if(!isset($_SESSION['loggedIn'])){
							
							$_SESSION['loggedIn'] = 0;
							$_SESSION['accessLevel'] = 0;
							$_SESSION['username'] = 'Anonymous';
							
						} else {
						
								
						}

							echo '<nav class="mobileUI-site-nav">';
							echo '	<ul>';
							echo '		<li><a href="index.php">Homepage</a></li>';
							echo '		<li><a href="Reports.php">Problem Reports</a></li>';
							echo '		<li><a href="report.php">Submit a Report</a></li>';
							
							if ($_SESSION['loggedIn'] == 1) {
								
								echo '<li><a href="admin.php">Admin Menu</a></li>';								
								
							}							
							
							if($_SESSION['loggedIn'] == 0){
							
								echo '		<li><a href="login.php">Login</a></li>';				
								
							} else {
								
								echo '		<li><a href="logout.php">Logout</a></li>';									
								
							}
							

							
							echo '	</ul>';
							echo '</nav>';

?>
