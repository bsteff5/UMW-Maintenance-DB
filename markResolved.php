<?php 
include('dbconnect.php');

$pid = $_POST['id'];
$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];

$date = $year . "-" . $month . "-" . $day;


$query = "INSERT INTO resolved (id, ResolveDate) VALUES ($pid, '$date');";

$result = mysqli_query($db, $query);

if ($result) {

		header('Location: unresolved.php');

} else {
	
			echo "Problem occured";	
			//header('Location: unresolved.php');
	
	}
?>