<?php
	session_start();
	include_once('db_connect/db.php');
	$user_id=$_SESSION['id'];
	//$sqlupdate=mysql_query("UPDATE student SET online_status='0' WHERE student_reg_id = '$user_login_id'")or die(mysql_error());
	session_destroy();
	header("location:index");


?>
