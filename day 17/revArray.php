<?php  
	$a = array("Mango", "Grape", "Apple", "Strawberry");
	print_r($a);
	echo "<br>Using count();";
	echo "<br>No. of elements in array: ".count($a);
	echo "<br>Using sort();";
	sort($a);
	print_r($a);
	echo "<br>Using array_reverse();";
	print_r(array_reverse($a));
	echo "<br>Using list();";
	list($f1, $f2, $f3, $f4) = $a;
	echo "<br>After sorting, the fourth item in the list is ".$f4	;
?>