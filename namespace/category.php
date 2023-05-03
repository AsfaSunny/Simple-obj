<?php



namespace wezen\v1\test\test2{
	class product
	{
		function __construct()
		{
			// echo "this is __constructor which is running from category file.";

			$product = new \wezen\v1\test\test1\product();
		}
	}

	function wow() {
		echo "This Function is running from category file.";
	}
}





?>