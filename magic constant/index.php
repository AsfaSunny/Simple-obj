<?php 

echo "The line number of this output code is: " . __LINE__;

echo "<br><br><br>";

echo "The line number of this output code is: " . __FILE__;

echo "<br><br><br>";

echo "The line number of this output code is: " . __DIR__;

echo "<br><br><br>";

function RealFunc()
{
    echo "The name of the function is: " . __FUNCTION__;
}

RealFunc();

echo "<br><br><br>";

function FotuneFunc()
{
    echo "The name of the function is: " . __METHOD__;
}

FotuneFunc();


echo "<br><br><br>";

class MagicCons
{
    function TR_ref()
    {
        echo "This is the name of existence class: " . __CLASS__;
    }
}

$testobj = new MagicCons();
$testobj->TR_ref();

 ?>