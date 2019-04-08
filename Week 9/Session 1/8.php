<?php
	function addFive($a){
		$a+=5;
	}
	function addSix(&$a){
		$a+=6;
	}
	$n = 10;
	addFive($n);
	echo "Number: $n <br/>";
	addSix($n);
	echo "Number: $n";
?>
