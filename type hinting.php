<?php


class school
{
	// function Student_name($names)
	// {
	// 	foreach ($names->Declared_name() as $student) {
	// 		echo $student . "<br>";
	// 	}
	// }

	function Student_name(student $names) //type hinting or casting
	{
		foreach ($names->Declared_name() as $student) {
			echo $student . "<br>";
		}
	}
}


class student
{
	function Declared_name()
	{
		return ["Sunny", "Ariful", "Asfake"];
	}
}

class Guardian
{
	function Guardian_name()
	{
		return ["Arifa", "Delower"];
	}
}


$Stu_o = new student();
$Sch_o = new school();
$Guardian_o = new Guardian();

$Sch_o-> Student_name($Stu_o); //object pass as argument

// $Sch_o-> Student_name($Guardian_o);

?>