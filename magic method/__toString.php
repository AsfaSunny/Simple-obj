<?php 

class Tester
{
	public function __toString(){
		return "This is an Object idiot. You can't print this Object or String of a Class" . get_class($this);
	}
}


$testobj = new Tester();

echo $testobj;


?>