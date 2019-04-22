<?php
	include('config.php');
	
	$sql = "SELECT * FROM employee";
	
	$result = mysqli_query($link,$sql);
	echo "<table border=2><tr><th>ID</th><th>Name</th><th>Salary</th><th>Address</th></tr>";
	while($row = mysqli_fetch_array($result))
	{
		$id = $row['id'];
		$name = $row['name'];
		$salary = $row['salary'];
		$address = $row['address'];
		
		echo "<tr><td> ".$id."</td><td>".$name."</td><td>".$salary."</td><td>".$address."</td><tr/>";
	}
	echo "</table>";
?>
