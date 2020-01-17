<?php
echo $_SERVER['SCRIPT_NAME'];
//Output "/somefile.php"

//exemplo 2:

$addr = $_SERVER['SCRIPT_NAME];
echo $addr;

///////////////////////////////

echo $_SERVER['HTTP_HOST];
//Outputs "Local host"

//////////////////////////////

//CREATE A FILE TO MANAGER THE ADDRESS OF ALL IMAGES

$host = $_SERVER['HTTP_HOST'];
$image_path = $host.'/images/';

//CONFIG PHP FILE IN SCRIPTS

require 'config.php';
echo '<img src="'.$image_path.'header.png" />';

// $_SERVER['HTTP_HOST'] returns the Host header from the current request. 




?>
