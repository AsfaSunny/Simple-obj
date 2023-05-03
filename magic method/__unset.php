<?php 

class Tester
{
	public $course = 'Php';
	private $frontEnd;
	private $backend;
	
	public function setName($fEnd, $lEnd)
	{
		$this->frontEnd = $fEnd;
		$this->backend = $lEnd;
	}

	public function __unset($property){
		unset($this->$property);
	}
}


$testobj = new Tester();
$testobj->setName('Vue', 'Laravel');

print_r($testobj);
echo "<br><br><br><br>";

unset($testobj->course);
unset($testobj->backend);
print_r($testobj);


?>