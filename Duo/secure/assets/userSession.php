<?php
session_start();
require 'connect.php';

$email = $_SESSION['studentLoggedIn'];

if(!isset($_SESSION['studentLoggedIn'])){
	
	header('Location:../login.php');	
}

?>