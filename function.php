<?php

//Simple function

function welcome(){
	echo "My favorite car is BMW X5";
}

welcome();




// Parameterized function.
echo "<br>";

function addition($value1,$value2){
	$add = $value1 + $value2;
	return $add;
}
$x = 10;
$y = 40;

echo "<hr>";
echo "<h1>Addition is ".addition($x,$y);"</h1>";
echo "<hr>";





function default_param($value1 = 10, $value2 = 20){
	$add = $value1 + $value2;
	return $add;
}

echo "<h1>Addition is ".default_param()."</h1>";
echo "<hr>";




function name($name = 'Meet'){
	echo "My name is: $name";
}
name('Aman');


?>