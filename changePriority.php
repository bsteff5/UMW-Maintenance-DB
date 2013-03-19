<?php
include('dbconnect.php');
	

$id = $_POST['id'];
$Priority= $_POST['Priority'];

				
 				
				$q = mysqli_query($db, "Update reports SET Priority = $Priority WHERE id=$id"); 
				
				if($q == TRUE) { 
					echo "successful"; 
				}else { 
					echo "error"; 
				} 
				header("Location: currentReports.php");
	
	                  
                         
                         
                         
    			mysqli_close($db);

?>