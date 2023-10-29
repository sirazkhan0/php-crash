<?php

$fname = 'siraz';
$lname = 'khan';
echo "<pre>";

function full_name(){
	$GLOBALS['full_name'] = $GLOBALS['fname'] .' '.$GLOBALS['lname'];

}

full_name();
// echo $full_name;


print_r($_SERVER);
?>