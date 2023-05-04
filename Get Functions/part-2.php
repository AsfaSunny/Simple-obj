<?php 

class parentClass
{
	public $name;
	public $age;
	public $gender;
	private $password;
	private $code;

	public function __construct(){
		print_r(get_class_vars(__CLASS__));
	}
}

echo "<br><br>";


echo "<br><br>";
$po = new parentClass();

echo "<br><br>";
print_r(get_class_vars(get_class($po)));


echo "<br><br>";
class justClass
{
	
}

print_r(get_declared_classes());

 ?>