<?php  
	//Array with keys.
	$ar1 = array("key 1" => "50", "key 2" => "70", "key 3" => "30");
	asort($ar1);
	print_r($ar1);
	//Array without keys.
	$ar2 = array(50, 20, 40, 10);
	echo "<br>";
	arsort($ar2);
	print_r($ar2);
	//Array with brackets.
	$ar3 = ["value 1", "value 2", "value 3"];
	echo "<br>";
	print_r($ar3);
	//Multi dimensional array.
	$ar4 = array("1" => array("1-1" => "1", "1-2" => "2", "1-3" => "3"), "2" => array("2-1" => "4", "2-2" => "5", "2-3" => "6"), "3" => array("3-1" => "7", "3-2" => "8", "3-3" => "9"));
	echo "<br>";
	ksort($ar4);
	print_r($ar4);
?>