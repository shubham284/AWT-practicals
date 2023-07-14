<?php  
	echo "The original array: <br>";
	$a = array("Nissan", "Skoda", "Honda", "BMW");
	echo "<pre>";
	print_r($a);
	echo "After sorting: <br>";
	sort($a);
	echo "<pre>";
	print_r($a);
?>