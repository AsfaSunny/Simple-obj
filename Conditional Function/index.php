<?php 
trait mainTrait{
	public function andrewTate()
	{
		return "Ok, this is from class.";
	}
}


class Tester
{
	use mainTrait;

	public function UnderMethod(){
		return "Ok, this is from class.";
	}
}



class childTester extends Tester
{
	
}

$obj = new Tester();
$objJr = new childTester();
// if (class_exists('Tester')) {
// 	$testobj = new Tester();
// 	echo $testobj;
// } else {
// 	echo "This is not a class or that class doesn't exists.";
// }



// if (method_exists($obj, 'UnderMethod')) {
// 	echo "Method exist under class";
// } else {
// 	echo "method doesn't exist under that class.";
// }



// if (trait_exists('mainTraitsa')) {
// 	echo "Trait exists";
// } else {
// 	echo "Trait doesn't exist.";
// }



// if (is_a($obj, 'Testerr')) {
// 	echo "This is the class of this Object";
// } else {
// 	echo "This class not related to this object";
// }



if (is_subclass_of($objJr, 'Tester')) {
	echo "This \$objJr is the sub-class of this Tester";
} else {
	echo "This \$objJr is not the sub-class of this Tester";
}

?>