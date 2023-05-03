<?php 


class student
{
	private static function many($name){
		echo "This static many named function was created by $name.";
	}

	// public static function __callStatic($staticMethod, $argus)
	// {
	// 	echo "The static typed method ($staticMethod) could be a private static function or it doesn't exist in this class.";
	// }

	public static function __callStatic($staticMethod, $argus)
	{
		if (method_exists(__class__, $staticMethod)) {
			call_user_func_array([__class__, $staticMethod], $argus);
		} else {
			echo "The static typed method ($staticMethod) doesn't exist in this class.";
		}
		
	}
}


student::many('Sunny');



 ?>