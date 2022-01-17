<?php
//main concept or blueprint of OOP
//getting things together:
//magic method and properties - all the way
//arguments pass and one specific position's argument pass is come as a spin-off


class Cars
{
	public $color = "";
	public $speed = "";
	public $door = "";



	function __construct($givenColor = "blue", $givenSpeed = "120km/h", $givenDoor = 4)
	{
		$this->color = $givenColor;
		$this->speed = $givenSpeed;
		$this->door = $givenDoor;
	}


	
	function Forward($default = 'All Car')
	{
		return "$this->color $default is moving Forward with $this->speed which have $this->door doors<br>";
	}

	function Backword($Carname = 'default')
	{
		return "$Carname is moving Reverse<br>"; 
	}
}

echo "<h1 style='font-family:Helvetica; color:indigo'>For <em>1st car</em></h1>";
$Toyota = new Cars('gray'); //argument pass to direct properties via magic method
echo $Toyota->Forward('Toyota');
echo $Toyota->Backword('Toyota'); 


echo "<h1 style='font-family:Helvetica; color:RoyalBlue'>For <em>2nd car</em></h1>";
$BMW = new Cars; 
echo $BMW->Forward('BMW'); 
echo $BMW->Backword('BMW'); 


echo "<h1 style='font-family:Helvetica; color:indigo'>For <em>3rd car</em></h1>";
$Ford = new Cars(null,"200km/h"); //argument pass to only 2nd properties via magic method
echo $Ford->Forward('Ford'); 
echo $Ford->Backword('Ford');


echo "<h1 style='font-family:Helvetica; color:Coral'>For <em>4th car</em></h1>";
$Audi = new Cars(null, null, 6); //argument pass to only 3rd properties via magic method
echo $Audi->Forward('Audi'); 
echo $Audi->Backword('Audi'); 



echo "<h1 style='font-family:Helvetica; color:crimson'>For <em>5th car</em></h1>";
$Ferrari = new Cars("yellow", "180km/h", 6); //argument pass to all properties via magic method
echo $Ferrari->Forward('Ferrari'); 
echo $Ferrari->Backword('Ferrari');
?>