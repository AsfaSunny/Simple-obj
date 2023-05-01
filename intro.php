<?php

/**
 * 
 */
class Calculate //class
{
	public $a, $b, $c; //properties
	
	function sum() //method
	{
		$this-> c = $this-> a + $this-> b;
		return $this-> c;
	}

	function sub()
	{
		$this-> c = $this-> a - $this-> b;
		return $this-> c;
	}
}


$obj1 = new Calculate(); //object

$obj1->a = 15;
$obj1->b = 15;


$obj2 = new Calculate();

$obj2->a = 20;
$obj2->b = 10;


echo "Sum Value Of Object 1: " . $obj1->sum() . "<br>";

echo "Sub Value Of Object 1: " . $obj1->sub() . "<br>";

echo "Sub Value Of Object 2: " . $obj2->sub() . "<br>";

?>