<?php

require 'product.php';
require 'category.php';
// require 'rate.php';


function wow() {
	echo "This Function is running from index file.";
}


use wezen\v1\test\test1 as Tester;
use wezen\v1\test\test2 as CateTester;



$pro_obj = new Tester\product();
echo "<br>";
$rate_obj = new CateTester\product();

echo "<br>";

// test2\wow();

?>