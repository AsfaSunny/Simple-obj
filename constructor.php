<?php

// class student //class
// {
// 	// public $name, $age; //properties
// 	public $name = "No Name";
// 	public $age = "No Age";
	
// 	function show() //method
// 	{
// 		echo "Name is " . $this-> name . " and his age is " . $this-> age . "<br>";
// 	}
// }

//backdated
// $obj1 = new student(); //object
// $obj1-> name = "Sunny";
// $obj1-> age = 21;
// $obj1-> show();




class student
{
	public $name;
	public $age;

	function __construct($stu_name, $stu_age) //constructor
	{
		$this->name = $stu_name;
		$this->age = $stu_age;
	}

	// function __construct($stu_name = "No Name", $stu_age = "No Age")
	// {
	// 	$this->name = $stu_name;
	// 	$this->age = $stu_age;
	// }
	
	function show()
	{
		echo "Name is " . $this-> name . " and his age is " . $this-> age . "<br>";
	}
}



$obj1 = new student('Sunny', 21);
// $obj1 = new student();
$obj1-> show();


$obj2 = new student('Somik', 21);
// $obj2 = new student();
$obj2-> show();


$obj3 = new student('Hadi', 21);
// $obj2 = new student();
$obj3-> show();


$obj2 = new student('Shakib', 21);
// $obj2 = new student();
$obj2-> show();

?>