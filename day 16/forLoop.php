<?php
	for ($x=0; $x <= 10; $x++) 
	{ 
		echo "The number is: $x <br>";
	}
	echo "<br>";
	$colors = array("Green", "Red", "Yellow", "Blue");
	foreach ($colors as $value) 
	{
		echo "$value <br>";
	}
	echo "<br>";
	$age = array("Ridham" => "19", "Harsh" => "19", "Om" => "21", "Dhruvin" => "18");
	foreach ($age as $x => $val) 
	{
		echo "$x = $val <br>";
	}
?>