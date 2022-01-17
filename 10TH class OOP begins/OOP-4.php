<?php 
//properties:
//properties are so many types: global, public, private etc.
//how to access to properties in php??? well via $this key word, just as $this->varible name without dollar sign




class Cars
{
	public $color = "red"; //yeah its a variable but when it defines under a class it will always be a properties
	//without writting public you can't show the result, rather find the error...

	
	function Forward($defaultCar = 'All Car') 
	{
		return "$this->color $defaultCar is moving Forward<br>"; 
	}

	function Backword($defaultCarName = 'All Car')
	{
		return "$defaultCarName is moving Reverse<br>"; 
	}
}


$Toyota = new Cars;

echo $Toyota->Forward('Toyota');

echo $Toyota->Backword();


?>