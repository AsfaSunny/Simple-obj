<?php

class TestClass
{
	function __construct()
	{
		echo "<h3>This is Constructor</h3>" . "<br>";
	}

	function middle(){
		echo "<h3>This is Program function.</h3>" . "<br>";
	}

	function __destruct()
	{
		echo "<h3>This destruct function is running after finishing all the work and operation of this class.</h3>" . "<br>";
	}

	function after(){
		echo "<h3>This program function is written after __destruct.</h3>" . "<br>";
	}

	function lastlost(){
		echo "<h3>Another program function which is written after __destruct.</h3>" . "<br>";
	}
}


$thatObj = new TestClass();
$thatObj->middle();
$thatObj->middle();
$thatObj->middle();

$thatObj->after();
$thatObj->lastlost();
$thatObj->after();


?>