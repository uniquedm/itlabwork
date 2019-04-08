<?php
$d = date("D");
$m = date("M");
$y = date("Y");

echo $d."<br/>";
echo $m."<br/>";
echo $y."<br/>";

echo date("d/M/y")."<br/>";
echo date("d-m-y")."<br/>";

if($d=="Wed")
	echo "Today is Wednesday!";
elseif($d=="Sun")
	echo "Have a nice Sunday!";
else
	echo "Have a nice day!";
?>
