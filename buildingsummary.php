<table>
<tr><th>Building</th><th>Number of reports</th><th>Average priority</th></tr>
<?php
	include ('dbconnect.php');
	$query = "SELECT Building, COUNT(id) AS 'num', Avg(Priority) AS 'avg' FROM reports GROUP BY Building;";
	$result = mysqli_query($db, $query) or die("Error Querying Database");
	while ($row = mysqli_fetch_array($result)) {
		$building = $row['Building'];
		$avg_priority = $row['avg'];
		$num_reports = $row['num'];
		echo "<tr><td>$building</td><td>$num_reports</td><td>$avg_priority</td></tr>\n";
	}

	mysqli_close($db);
?>
</table>
