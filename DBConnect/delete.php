<?php
	include('config.php');
	$rename = "Gohan";
	$sql = "delete from employee where id=36";
	//$sql="delete from employee where name='Fire'";
	//for($i=0;$i<10;$i++)
	if(mysqli_query($link,$sql))
	{
		echo "Record deleted successfully<br/>";
	}
	else
	{
		echo "Error deleting into database".mysqli_error($link);
	}
?>
