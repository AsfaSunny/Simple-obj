<?php

// interface MoM{
// 	function sum();
// }

// interface DaD{
// 	function sub();
// }

// class Children implements MoM, DaD
// {
	
// 	function sum()
// 	{
// 		echo "This thing I got from my mom";
// 	}

// 	function sub()
// 	{
// 		echo "This thing I got from my Dad";
// 	}
// }


// $obj = new Children();

// $obj->sum();
// echo "<br>";
// $obj->sub();


// interface MoM{
// 	function sumMOM();
// }

// interface DaD{
// 	function subDAD();
// }

class Children
{
	
	function sum($a, $b)
	{
		echo $a + $b;
	}

	function sub($c, $d)
	{
		echo $c - $d;
	}
}

$obj = new Children();

$obj->sum(45, 20);
echo "<br>";
$obj->sub(20, 15);
echo "<br>";


$obj1 = new Children();

$obj1->sum(5, 20);
echo "<br>";
$obj1->sub(50, 15);

?>