<?php
	include('config.php');
	
	$sql = "INSERT INTO employee(name,salary,address) values('Fire',1120000,'Bangalore')";
	//$sql="delete from employee where name='Fire'";
	//for($i=0;$i<10;$i++)
	if(mysqli_query($link,$sql))
	{
		echo "Record inserted successfully<br/>";
	}
	else
	{
		echo "Error inserting into database".mysqli_error($link);
	}
?>
