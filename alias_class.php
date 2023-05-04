<?php 

class parentClass
{
	public $name;
}

$po = new parentClass();
$po->name = 'sunny';
echo $po->name . "<br><br>";


class_alias('parentClass', 'oneClass');

$aliasobj = new oneClass();
$po->name = 'somik';
echo $po->name . "<br><br>";




 ?>