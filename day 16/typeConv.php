<?php  
	$x = "123.abc";
	echo "a = ".$x;
	echo "<br>Type of 'a' is ".gettype($x);
	settype($x, "int");
	echo "<br>", $x;
	echo "<br>After conversion, the type of 'a' is ".gettype($x);
?>