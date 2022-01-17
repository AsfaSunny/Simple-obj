



	
<?php

echo "<h1 style='font-family:Helvetica; color:red'>Using <em>echo</em></h1>";

function add1($x, $y){
    $total = $x + $y;
    echo $total; //stayed and printed
}

echo $result = add1(2, 2);

// echo "<p>2 + 2 = ", $result, "</p>"; //another stay and printed new







echo "<br><br><br><br>";





echo "<h1 style='font-family:Helvetica; color:indigo'>Using <em>return</em></h1>";

function add2($x, $y){
    $total = $x + $y;
    return $total;
}

echo $result = add2(2, 2);

echo "<p>4+4  = ", $result + 4, "</p>";

echo "<p>", $result2 = $result + 4, "</p>";

echo $result3 = $result2 + 8;


?>