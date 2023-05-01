<?php

abstract class Parent_Class
{
	public $name;


	// function calculate($a, $b)
	// {
	// 	echo $a + $b . "<br>";
	// }


	abstract protected function calculate($a, $b);
}


class Child_Class extends Parent_Class
{
	
	function calculate($c, $d)
	{
		echo $c + $d . "<br>";
	}
}


// $test_object = new Parent_Class();
// $test_object->name = 'Sunny';

// echo $test_object->name;

$test_object = new Child_Class();
$test_object->name = 'Ariful Asfake Sunny';

$test_object->calculate(5, 7);

echo $test_object->name;

?>