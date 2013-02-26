<?php
include('dbconnect.php');

echo $_POST['Building'];	

$Building = $_POST['Building'];
$Floor= $_POST['Floor'];
$Room= $_POST['Room'];
$Reportdate=$_POST['year']."-".$_POST['month']."-".$_POST['day'];
$Description=$_POST['Description'];
				
 				if(isset($_POST['Report'])) { 
				   echo"asdasdsd";
				$q = mysqli_query($db, "INSERT INTO reports (Description,ReportDate,Building,Floor,Room) VALUES ($Description,$ReportDate,$Building,$Floor,$Room)") or die(mysql_error()); 
				if($q) { 
					echo "successful"; 
				}else { 
					echo "error"; 
				} 
				} 

	
	       $query = "SELECT * FROM reports";
               $result = mysqli_query($db, $query)
                         or die("Error Querying Database");
    while($row = mysqli_fetch_array($result)) {
  		$id = $row['id'];
  	echo "$id\n";
  }                 
                         
                         
                         
    mysqli_close($db);

?>