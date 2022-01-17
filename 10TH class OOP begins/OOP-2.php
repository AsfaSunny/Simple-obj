<?php
//same class using again and again



class Cars
{
	
	function Forward($default = 'All Car') //here in() will be parameter pass from arguments
	{
		return "$default is moving Forward<br>"; //argument release kore parameter pass kora hole $default kono kaj korbe nah..
	}

	function Backword($Carname = 'default') //parameter passed //parameter e direct value dile error asbe nah, argument passer der o kono disturb korbe nah...but na dile first passer der kono disturb korbe na thik, but next passer der disturb korbe & page e error asbe
	{
		return "$Carname is moving Reverse<br>"; 
	}
}


$Toyota = new Cars;

echo $Toyota->Forward(); //element used here in() will be called arguments

echo $Toyota->Backword('Toyota'); //argument set

$BMW = new Cars; 
echo $BMW->Backword('BMW'); 

$Ford = new Cars; 
echo $Ford->Backword('Ford');
//curisity=>    echo $Ford = new Cars->Backword();


?>