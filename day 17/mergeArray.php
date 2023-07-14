<?php  
	$a = array(1, 2, 3, 4, 5);
	$b = array(6, 7, 8, 9, 10);
	echo "First array";
	print_r($a);
	echo "<br>Second array";
	print_r($b);
	$c = array_merge($a, $b);
	echo "<br><br>After merging: ";
	print_r($c);
?>