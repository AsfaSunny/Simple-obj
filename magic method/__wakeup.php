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

	public function __wakeup(){
		echo "unserialize method runned and operation completed. Rmember that if the method didn't runned than this message won't be shown to you. You can take it as a success message." . "<br><br>";
	}
}


$testobj = new Tester();
$testobj->setName('Ariful', 'Asfake');


$serial1 = serialize($testobj);
echo $serial1;


echo "<br><br><br>";


$unserial = unserialize($serial1);
print_r($unserial);

?>