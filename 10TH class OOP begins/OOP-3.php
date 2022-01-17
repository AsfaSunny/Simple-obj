<?php 

//magic method or function:


/**
 * 
 */
class Cars
{	

	function __destruct() //destruct is pre-defined function and its a magic method, doesn't matter where you defined it in your program, it will always print at the last of every thing...
	{
		echo "ego has been riased so high, so that it will always be showing its result at the end of everything<br>";
	}
	

	function Forward($default = 'All Car') 
	{
		return "$default is moving Forward<br>";
	}


	function Backword($Carname = 'default')
	{
		return "$Carname is moving Reverse<br>"; 
	}

	function __construct() //construct is pre-defined function and its a magic method, doesn't matter where you defined it in your program, it will always act like its will of first out, baki funciton age defined kora hok ba na hok construct tader age kaj kora shuru korbe
	{
		echo "say good bye to function calling, cause he have a lot of ego<br>";
	}






	function komedy() //destruct is pre-defined function and its a magic method, doesn't matter where you defined it in your program, it will always print at the last of every thing...
	{
		echo "ego has been riased so high, so that it will always be showing its result at the end of everything<br>";
	}

}

$car = new Cars;
echo $car-> Forward();

//we will use construct in our project for our database connection and session release...


?>