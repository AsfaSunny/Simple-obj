<?php


// class Car{
// 	public static $name = "Bugatti Chiron 0-400-0";

// }

// echo Car::$name . "<br>";



// class tested extends Car {
// 	public static function show() {
// 		echo "The Speedest Car of the world is " . parent::$name;
// 	}
// }

// tested::show();

// $CarObj = new tested();
// $CarObj->show();




class Car
{
	protected static $name = "Sunny";
	
	public function show()
	{
		echo self::$name;
		echo "<br>";
		echo static::$name;
	}
}


class tested extends Car {
	protected static $name = "venom f5";
}



$test = new tested();
$test-> show();

?>