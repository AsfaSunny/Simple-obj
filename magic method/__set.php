<?php


class abc
{
	private $name;

	public function viewpoint()
	{
		echo $this->name . "<br>";
	}
	

	function __get($searched_property)
	{
		echo "<h1 style='color: brown'>You are trying to access a private property or the element ($searched_property) you're searched doesn't exist in the class</h1>" . "<br>";
	}

	// function __set($try_property, $value)
	// {
	// 	echo "<h2 style='color: green'>You are trying to set value in a private property or the element ($try_property) you searched doesn't exist in the class</h2>" . "<br>";
	// }

	function __set($set_property, $value)
	{
		if (property_exists($this, $set_property)) {
			$this->$set_property = $value;
		} else {
			echo "<h2 style='color: blue'>Property ($set_property) doesn't exist in the class. </h2>" . "<br>";
		}
		
	}
}


$testOBJ = new abc();
$testOBJ->viewpoint();

$testOBJ->name;

$testOBJ->name = "Sunny";
$testOBJ->course = "CSE";

$testOBJ->viewpoint();



?>