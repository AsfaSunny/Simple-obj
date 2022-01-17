<?php 

//here in propeties of OOP we actually solve a problem that we faced during variable like:
echo "<h1 style='font-family:Helvetica; color:tomato'>OLD school of PHP</h1>";
$num = 1;
$num = 2;
$num = 4;

echo "$num";
echo "<br><br><br>";




class Cars
{
	public $color = "red";
	public $color2 = "yellow<br>";


	
	function Forward($default = 'All Car')
	{
		return "$this->color $default is moving Forward<br>";
	}

	function Backword($Carname = 'default')
	{
		return "$Carname is moving Reverse<br>"; 
	}
}

echo "<h1 style='font-family:Helvetica; color:indigo'>For <em>1st car</em></h1>";
$Toyota = new Cars;
echo $Toyota->Forward('Toyota'); 
echo $Toyota->Backword('Toyota'); 




//variable problem solved: we can send or set any value we want
echo "<h1 style='color:indigo'>Property is what we know variable, <em>right now we can print it in many forms:</em></h1>";
$colorTwo = new Cars;
echo $colorTwo->color2;
echo $colorTwo->color2= "orange";
echo $colorTwo->color2= "green";
echo $colorTwo->color2= "orange";


?>