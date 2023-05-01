<?php

trait hello{
	public function first_hello(){
		echo "Good Morning from hello trait";
	}
}


trait bye{
	public function first_hello(){
		echo "Good Bye from bye trait";
	}
}


trait welcome{
	private function last_hello(){
		echo "Welcome to the OOP of PHP";
	}
}



class UsedClass
{
	// use hello, bye;
	// use hello, bye{
	// 	hello::first_hello insteadof bye;
	// 	bye::first_hello as last_hello;
	// }

	// use welcome;
	use welcome{
		// welcome::last_hello as public;
		welcome::last_hello as public main_hello;
	}
}


// class baseClass extends UsedClass
// {
// 	public function first_hello(){
// 		echo "I am from baseClass";
// 	}
// }


$object1 = new UsedClass();

$object1-> last_hello();
echo "<br>";
// $object1-> main_hello();

// $object1 = new baseClass();
// $object1-> last_hello();
// echo "<br>";

?>