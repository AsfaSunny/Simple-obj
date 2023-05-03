<?php 

class Tester
{
	public $course = 'Php';
	private $firstname;
	private $lastname;
	
	public function setName($fname, $lname)
	{
		$this->firstname = $fname;
		$this->lastname = $lname;
	}

	public function __sleep(){
		return array('firstname', 'lastname');
	}
}


$testobj = new Tester();
$testobj->setName('Ariful', 'Asfake');


$serial1 = serialize($testobj);
echo $serial1;

?>