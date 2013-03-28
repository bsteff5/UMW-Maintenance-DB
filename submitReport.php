<?php
include('dbconnect.php');
	

$Building = $_POST['Building'];
$Floor= $_POST['Floor'];
$Room= $_POST['Room'];
$ReportDate=$_POST['year']."-".$_POST['month']."-".$_POST['day'];
$Description=$_POST['Description'];
				
				$qi = "INSERT INTO reports (Description, ReportDate, Priority, BuildingID) VALUES ('$Description', '$ReportDate', 0, 0);";
				echo "$qi\n";
				$q = mysqli_query($db, $qi) or die(mysqli_error($db)); 
	

				$result = mysqli_query($db, "SELECT * FROM rooms WHERE room = ".$Room.";");
				
				$exists = mysqli_num_rows($result);
				
				//echo "ROOM: " . $Room .  " RESULT " . $exists . "--\n";
				if( $exists > 0) {
				
				} else {
					$q = mysqli_query($db, "INSERT INTO rooms (room) VALUES ('$Room');") or die("1");
				}


				

				$q= mysqli_query($db, "INSERT INTO room_problems (room) VALUES ('$Room');") or die("2");
				
				if($q == TRUE) { 
					echo "successful"; 
				}else { 
					echo "error"; 
				} 
				
				header("Location: report.php");
	
	                  
                         
                         
                         
    			mysqli_close($db);

?>
