<?php

//$arr = array();
$a = 1;
$b = 2;
$c = 3;

$arr = [1,2,3];
echo "<h1> Indexed array:- </h1><br>";
echo "<pre>";
print_r($arr);
echo "<hr>";
echo "<h1> Assosiative array:- </h1><br>";
$assoc_arr = [
	'Skoda' => 'Octavia',
	'Ford' => 'Figo',
	'Hyundai' => 'Elantra',
	'Toyota' => 'Camry',
	'BMW' => 'X5',
	'Audi' => 'Q8'
];
print_r($assoc_arr);
echo "<hr>";
echo "<h1> Multi-dimesional array:- </h1><br>";
$multi_arr = [
	'Skoda' => 'Octavia',
	'Ford' => 'Figo',
	'Hyundai' => [
		'Verna' => [
			['SX', 'SX Optional']
		], 
		'Model 2' => 'Elantra', 
		'Model 3' => 'Sonata'
	],
	'Toyota' => [
		'Model 1' => 'Camry', 
		'Model 2' => 'Innova', 
		'Model 3' => 'Fortuner'
	],
	'BMW' => [
		'Model 1' => 'Series 7', 
		'Model 2' => 'Series 5', 
		'Model 3' => 'Series 3'
	],
	'Audi' => 'Q8'
];
print_r($multi_arr);
?>