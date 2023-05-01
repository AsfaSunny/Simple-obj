<?php

// class student
// {
// 	protected $name;

// 	function __construct($stu_name)
// 	{
// 		$this->name = $stu_name;
// 	}
	
// 	protected function show()
// 	{
// 		echo "Name is " . $this-> name . "<br>";
// 	}
// }



// class student
// {
// 	private $name;

// 	// function __construct($stu_name)
// 	// {
// 	// 	$this->name = $stu_name;
// 	// }
	
// 	function show()
// 	{
// 		echo "Name is " . $this-> name . "<br>";
// 	}
// }



class student
{
	private $name;
	// protected $name;

	// function __construct($stu_name)
	// {
	// 	$this->name = $stu_name;
	// }
	
	function show()
	{
		echo "Name is " . $this-> name . "<br>";
	}
}



class Derived extends student
{
	
	function __construct($first_name)
	{
		$this->name = $first_name;
	}

	function test()
	{
		echo "Name is " . $this-> name . "<br>";
	}
}


$obj1 = new student('Sunny', 21);
$obj1-> show();


$obj2 = new Derived('Somik', 21);
$obj2-> test();




class guardian
{
	private $her_name = 'Arifa';
	
	
	function Guardian_show()
	{
		echo "Name is " . $this-> her_name . "<br>";
	}

	// Guardian_show();
}

$obj1 = new guardian();
$obj1-> Guardian_show();
// $obj1->her_name = 'Sultana';

?>