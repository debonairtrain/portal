<?php
header("Access-Control-Allow-Origin: *");
	$servername = "localhost";
	$username = "root";
	$password = "";

	$db = "school_portal";

 //create login connection and login
	$con = new mysqli($servername, $username, $password, $db);
	ini_set('date.timezone', 'Africa/Lagos');

?>
