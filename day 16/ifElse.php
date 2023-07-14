<?php  
	$x = 1;
	while($x <= 10)
	{
		if ($x == 4) 
		{
			break;
		}
		echo "The number is: $x <br>";
		$x++;
	}
	echo "<br>";
	$y = 1;
	while($y <= 10)
	{
		if ($y == 4) 
		{
			continue;
		}
		echo "The number is: $y <br>";
		$y++;
	}
?>