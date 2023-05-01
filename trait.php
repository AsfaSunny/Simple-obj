<?php

trait hello{
	public function first_hello(){
		echo "Good Morning";
	}

	public function second_hello(){
		echo "Good Noon";
	}
}


trait bye{
	public function first_bye(){
		echo "Good Bye";
	}

	public function last_bye(){
		echo "Good Night";
	}
}



class UsedClass
{
	use hello, bye;
}


class baseClass
{
	use hello;
}


$object1 = new UsedClass();
$object2 = new baseClass();

$object1-> first_hello();
echo "<br>";
$object1-> second_hello();
echo "<br>";
$object1-> first_bye();
echo "<br>";
$object1-> last_bye();
echo "<br>";



$object2-> first_hello();
echo "<br>";
$object2-> second_hello();
echo "<br>";
// $object2-> first_bye();
echo "<br>";

?>