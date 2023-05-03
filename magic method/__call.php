<?php


class abc
{
	private $name;
	private $first_name;
	private $last_name;

	private function viewpoint($fname, $lname)
	{
		$this->first_name = $fname;
		$this->last_name = $lname;
	}
	

	function __get($searched_property)
	{
		echo "<h1 style='color: brown'>You are trying to access a private property or the element ($searched_property) you're searched doesn't exist in the class</h1>" . "<br>";
	}

	function __set($try_property, $value)
	{
		echo "<h2 style='color: green'>You are trying to set value in a private property or the element ($try_property) you searched doesn't exist in the class</h2>" . "<br>";
	}

	// function __call($try_method, $argus)
	// {
	// 	echo "<h2 style='color: blue'>You are trying to assign argument/parameters in a private method ($try_method) or that method doesn't exist in the class</h2>" . "<br>";
	// }

	function __call($try_method, $argus)
	{
		if (method_exists($this, $try_method)) {
			call_user_func_array([$this, $try_method], $argus);
		} else {
			echo "<h2 style='color: blue'>method ($try_method) doesn't exist in the class. </h2>" . "<br>";
		}
		
	}
}


$testOBJ = new abc();

$testOBJ->name;

// $testOBJ->name = "Sunny";
// $testOBJ->course = "CSE";

$testOBJ->viewpoint('Ariful', 'Asfake');

echo "<pre>";
print_r($testOBJ);
echo "</pre>";

?>