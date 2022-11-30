<?php
header("Access-Control-Allow-Origin: *");
	$servername = "localhost";
	$username = "debonai2_user";
	$password = "g}FHALSVaR4j";

	$db = "debonai2_portals";

 //create login connection and login
	$con = new mysqli($servername, $username, $password, $db);
	ini_set('date.timezone', 'Africa/Lagos');

?>
