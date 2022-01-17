<?php 

function sayHelloLater(){
    return "Hello<br>";
}

function sayGoodbyeNow(){
    echo "Goodbye<br>";
}

$hello = sayHelloLater(); // "Hello" returned and stored in $hello 
$goodbye = sayGoodbyeNow(); // "Goodbye" is echo'ed and nothing is returned


echo $hello; // "Hello" is echo'ed
echo $goodbye; // nothing is echo'ed, cause already echo'ed









echo "<h1 style='font-family:Helvetica; color:indigo'>LETS USE MORE TIME <em>echo</em></h1>";
echo $goodbye = sayGoodbyeNow();
echo $goodbye2 = sayGoodbyeNow();
echo $goodbye;
echo $goodbye;
echo $goodbye;








echo "<h1 style='font-family:Helvetica; color:tomato'>LETS USE MORE TIME <em>return</em></h1>";

echo $hello2 = sayHelloLater();
echo $hello3 = sayHelloLater();
echo $hello3;
echo $hello3;
echo $hello3;
echo $hello3;
echo $hello3;








echo "<h1 style='font-family:Helvetica; color:tomato'>LETS USE MORE TIME <em>return with something else</em></h1>";
echo $hello3 = sayHelloLater();
echo $hello4 = $hello3 . " Kid";
echo $hello3;
echo $hello3;
echo $hello3;
echo $hello3;

?>