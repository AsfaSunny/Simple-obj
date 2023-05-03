<?php

// function __autoload($Clsvalue)
// {
// 	require 'classes/' . $Clsvalue . '.php';
// } doesn't support or work anymore



spl_autoload_register(function($Clsvalue) {
	// include 'classes/' . $Clsvalue . '.php';
	require 'classes/' . $Clsvalue . '.php';
});


// $firstObj = new testClass();

$secondObj = new second();

$firstObj = new first();

?>