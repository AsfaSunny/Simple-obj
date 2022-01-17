<?php 

//why oop? 
//1. concept of oop is we will use these programm again and again
//2. we can use a class, so many times
//3. we can use a funciton, so many times



class RunningMode //cars //class name and there will always be 1 or more functions/mehtod in a class
{
	function Forward() //method defines //here in() will be parameter pass from arguments
	{
		echo "is moving Forward<br>";
	}

	function Backword() //parameter passed
	{
		return "is moving Reverse<br>"; //why return? bar bar use o manipulation korar jonno return use kora hoy
	}
}

$obj = new RunningMode; //class convert into an object
// print_r($obj) ;

$obj->Forward(); //through the object we entering in the method //element used here in() will be called arguments

echo $obj->Backword(); //2nd method access by obj

$BMW = new RunningMode; //same class used for multiple times like we discussed in 2nd point
echo $BMW->Backword(); 

?>