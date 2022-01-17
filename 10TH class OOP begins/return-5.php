<?php 

function sayHelloLater(){
    return "Hello";
}

function sayGoodbyeNow(){
    echo "Goodbye";
}

$hello = sayHelloLater(); // "Hello" returned and stored in $hello 
$goodbye = sayGoodbyeNow(); // "Goodbye" is echo'ed and nothing is returned


echo $hello;
echo $hello . " Sunny"; // "Hello" is echo'ed
echo $goodbye . " Sunny ";
echo $hello . " Sunny";
echo $goodbye . " Sunny ";









echo "<h1 style='font-family:Helvetica; color:tomato'>LETS USE MORE TIME <em>echo with something else</em></h1>";
echo $goodbye = sayGoodbyeNow();
echo $goodbye . " Kid<br>";
echo $goodbye . " Dad<br>";
echo $goodbye;
echo $goodbye;








echo "<h1 style='font-family:Helvetica; color:tomato'>LETS USE MORE TIME <em>return with something else</em></h1>";
echo $hello3 = sayHelloLater();
echo $hello3 . " Kid<br>";
echo $hello3 . " Dad<br>";
echo $hello3;
echo $hello3;
echo $hello3;
?>