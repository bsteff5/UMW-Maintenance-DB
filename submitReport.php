<?php
include('dbconnect.php');
	

$Building = $_POST['Building'];
$Floor= $_POST['Floor'];
$Room= $_POST['Room'];
$ReportDate=$_POST['year']."-".$_POST['month']."-".$_POST['day'];
$Description=$_POST['Description'];
				
 				
				$q = mysqli_query($db, "INSERT INTO reports (Description,ReportDate) VALUES ('$Description','$ReportDate')") or die("Couldn't query the Database or query failed"); 
				$q = mysqli_query($db, "INSERT INTO rooms (room) VALUES ('$Room')") or die("Couldn't query the Database or query failed");
				$q= mysqli_query($db, "INSERT INTO room_problems (room) VALUES ('$Room')") or die("Couldn't query the Database or query failed");
				if($q == TRUE) { 
					echo "successful"; 
				}else { 
					echo "error"; 
				} 
				
				header("Location: report.php");
	
	                  
                         
                         
                         
    			mysqli_close($db);

?>
