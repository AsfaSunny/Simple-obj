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
echo $goodbye; // nothing is echo'ed

?>