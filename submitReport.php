<?php
include('dbconnect.php');

echo $_POST['Building'];	

$building = $_POST['Building'];			
				
 				if(isset($_POST['Report'])) { 
				   echo"asdasdsd";
				$q = mysqli_query($db, "INSERT INTO reports (building, floor,) VALUES ('$values')")or die(mysql_error()); 
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