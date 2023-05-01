<?php

class employee
{
	public $name;
	public $age;
	public $salary;

	function __construct($of_name, $of_age, $of_salary)
	{
		$this->name = $of_name;
		$this->age = $of_age;
		$this->salary = $of_salary;
	}
	
	function show()
	{
		echo "<h2>Employee Info</h2>";
		echo "Name is " . $this-> name . "<br>";
		echo "and his age is " . $this-> age . "<br>";
		echo "and his salary is " . $this-> salary . "<br>";
	}
}



class Manager extends employee
{
	public $city; 

	function __construct($of_name, $of_age, $of_salary, $of_city)
	{
		$this->name = $of_name;
		$this->age = $of_age;
		$this->salary = $of_salary;
		$this->city = $of_city;
	}

	function show()
	{
		echo "<h2 style='color: brown'>Manager Info</h2>";
		echo "Manger Name is " . $this-> name . "<br>";;
		echo "and his age is " . $this-> age . "<br>";
		echo "and his salary is " . $this-> salary . "<br>";
		echo "and his city is " . $this-> city . "<br>";
	}
}


class CEO extends Manager
{
	public $city; 

	function __construct($of_name, $of_age, $of_salary, $of_city)
	{
		$this->name = $of_name;
		$this->age = $of_age;
		$this->salary = $of_salary;
		$this->city = $of_city;
	}

	function show()
	{
		echo "<h2 style='color: springgreen'>CEO Info</h2>";
		echo "Manger Name is " . $this-> name . "<br>";;
		echo "and his age is " . $this-> age . "<br>";
		echo "and his salary is " . $this-> salary . "<br>";
		echo "and his city is " . $this-> city . "<br>";
	}
}



class Founder extends employee
{
	function show()
	{
		echo "<h2 style='color: springgreen'>CEO Info</h2>";
		echo "Manger Name is " . $this-> name . "<br>";;
		echo "and his age is " . $this-> age . "<br>";
		echo "and his salary is " . $this-> salary . "<br>";
		echo "and his city is " . $this-> city . "<br>";
	}
}



$obj1 = new employee('Sunny', 21, 3000);
$obj1-> show();


$obj2 = new employee('Somik', 21, 4000);
$obj2-> show();


$obj3 = new Manager('Hadi', 21, 10000, 'Feni');
$obj3-> show();

$obj4 = new CEO('Delower', 21, 21000, 'Noakhali');
$obj4-> show();

$obj5 = new Founder('Arifa', 21, 30000, 'Feni');
$obj5-> show();


?>