<?php
include('dbconnect.php');
	

$Building = $_POST['Building'];
$Floor= $_POST['Floor'];
$Room= $_POST['Room'];
$Reportdate=$_POST['year']."-".$_POST['month']."-".$_POST['day'];
$Description=$_POST['Description'];
				
 				
				$q = mysqli_query($db, "INSERT INTO reports (Description,ReportDate,Building,Floor,Room) VALUES ('$Description','$ReportDate','$Building','$Floor','$Room')") or die("Couldn't query the Database or query failed"); 
				
				if($q == TRUE) { 
					echo "successful"; 
				}else { 
					echo "error"; 
				} 
				
				header("Location: report.php");
	
	                  
                         
                         
                         
    			mysqli_close($db);

?>