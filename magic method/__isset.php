<?php


class abc
{
	public $student_name;
	private $first_name = 'Trent';
	private $last_name;

	private $infograph = ["name" => "Sunny", "age" => 22, "course" => "B.Sc"];

	public function viewpoint($fname, $lname)
	{
		$this->first_name = $fname;
		$this->last_name = $lname;
	}

	public function __isset($property)
	{
		echo isset($this->first_name);
		echo isset($this->infograph[$property]);
	}
}


$testOBJ = new abc();

$testOBJ->student_name = 'Test Student';

// $testOBJ->first_name = 'Trent';

echo isset($testOBJ->student_name);
echo "<br>";
echo isset($testOBJ->first_name);
echo "<br>";
echo isset($testOBJ->age);
// echo empty($testOBJ->city);
// echo isset($testOBJ->city);

?>