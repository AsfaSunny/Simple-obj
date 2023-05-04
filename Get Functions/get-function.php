<?php 

class parentClass
{
	public function __construct(){
		print_r(get_class_methods($this));
	}

	public function kim(){ }
	public function lam(){ }
	private function Arab(){ }
}

echo "<br><br>";

class childClass extends parentClass
{
	function inn(){
		echo "Class name " . get_class($this) . "<br>";
		echo "Parent Class name: " . get_parent_class($this) . "\n";
	}
}
echo "<br><br>";
$po = new parentClass();

$co = new childClass();
$co->inn();

echo "<br><br>";
echo "Class name is: " . get_class($po);

echo "<br><br>";
print_r(get_class_methods($co));



 ?>