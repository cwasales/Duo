<?php
//Connect to my database
$server = "localhost";
$uname = "creamdoll58";
$pass = "Liv4love7";
$db = "cybercodewarrior";

$dbc = mysqli_connect($server, $uname, $pass, $db);

if(!$dbc){
	
	echo "Connection Failed!" . mysqli_connect_error($dbc);
} 
?>