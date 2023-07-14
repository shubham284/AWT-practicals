<?php  
	echo "The original array: <br>";
	$a = array("Nissan" => "GTR", "Skoda" => "Slavia", "Honda" => "Rx1", "BMW" => "M5cs");
	echo "<pre>";
	print_r($a);
	echo "<br>After sorting: ";
	ksort($a);
	echo "<pre>";
	print_r($a);
?>