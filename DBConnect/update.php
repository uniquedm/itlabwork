<?php
	include('config.php');
	$rename = "Gohan";
	$sql = "Update employee set name='$rename' where id=36";
	//$sql="delete from employee where name='Fire'";
	//for($i=0;$i<10;$i++)
	if(mysqli_query($link,$sql))
	{
		echo "Record updated successfully<br/>";
	}
	else
	{
		echo "Error updating into database".mysqli_error($link);
	}
?>
