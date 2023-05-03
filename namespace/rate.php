 <?php

namespace rate{
	class product
	{
		function __construct()
		{
			// echo "this is __constructor which is running from category file.";

			$product = new \test1\product();
		}
	}

	function wow() {
		echo "This Function is running from category file.";
	}
}


?>