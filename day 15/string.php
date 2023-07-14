<?php 
	class Car
	{
		public $color;
		public $model;
		public function __construct($color, $model)
		{
			$this -> color = $color;
			$this -> model = $model;
		}
		public function msg()
		{
			return "My car is a ". $this -> color. " ". $this -> model. "!";
		}
	}
	$myCar = new Car("Black", "Nissan");
	echo $myCar -> msg();
	echo '<br>';
	$myCar = new Car("Red", "Toyota");
	echo $myCar -> msg();
?>