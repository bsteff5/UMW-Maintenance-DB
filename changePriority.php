<?php
session_start();
include('dbconnect.php');
	

$id = $_POST['id'];
$Priority= $_POST['Priority'];

				
 				if($_SESSION['loggedIn']==1){
				$q = mysqli_query($db, "UPDATE  `umw_maintenance`.`reports` SET  `Priority` =  $Priority WHERE  `reports`.`id` =$id;"); 
				
				if($q == TRUE) { 
					echo "successful"; 
				}else { 
					echo "error"; 
				} 
				}
                                 

				header("Location: currentReports.php");
	
	                  
                         
                         
                         
    			mysqli_close($db);

?>