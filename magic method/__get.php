<?php

// class tester
// {
// 	function __get($searched_property)
// 	{
// 		echo "<h3>You are trying to access a private property or the element ($searched_property) you're searched doesn't exist in the class</h3>" . "<br>";
// 	}
// }


// $testOBJ = new tester();
// $testOBJ->name;





class xyz
{
	private $datas = [
		"name" => "Sunny",
		"age" => 22,
		"class" => "B.Sc"
	];

	function __get($searched_key)
	{
		if (array_key_exists($searched_key, $this->datas)) {
			return $this->datas[$searched_key];
		} else {
			echo "<h3>You searched element ($searched_key) doesn't exist in the array</h3>" . "<br>";
		}
		
	}
}


$testOBJ = new xyz();
// echo $testOBJ->name;
echo $testOBJ->gender;

?>