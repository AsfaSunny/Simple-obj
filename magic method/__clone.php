<?php 

class CloningCls
{
	public $name;
	public $course;
	
	function __construct($n)
	{
		$this->name = $n;
	}

	public function SetCourse(Course $ChoiceCourse)
	{
		$this->course = $ChoiceCourse;
	}

	public function __clone(){
		$this->course = clone $this->course;
	}
}


class Course
{
	public $courseName;
	
	function __construct($Cn)
	{
		$this->courseName = $Cn;
	}
}


$Student_1 = new CloningCls('Sunny');
$Course_1 = new Course('PHP');

$Student_1->SetCourse($Course_1);



// $Student_2 = $Student_1;
$Student_2 = clone $Student_1;
$Student_2->name = 'Somik';

// $Student_2->course = clone $Student_1->course;
$Student_2->course->courseName = 'Python';




$Student_3 = clone $Student_2;
$Student_3->name = 'Hadi';

// $Student_3->course = clone $Student_1->course;
$Student_3->course->courseName = 'JavaScript';



$Student_4 = clone $Student_2;
$Student_4->name = 'Shakib';

$Student_4->course->courseName = 'C++';



echo $Student_1->name;
echo "<br><br>";

// echo $Student_1->course;
// echo "<br><br>";

echo $Student_2->name;
echo "<br><br>";

echo $Course_1->courseName;
echo "<br><br>";





print_r($Student_1);
echo "<br><br>";
print_r($Student_2);
echo "<br><br>";
print_r($Student_3);
echo "<br><br>";
print_r($Student_4);

?>