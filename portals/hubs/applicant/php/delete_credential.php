<?php
session_start();

include_once('../../../db_connect/db.php');

if(isset($_SESSION['user_id'])){
	$applicant_id=$_SESSION['user_id'];

$file_id = $_POST['token'];

		$query = mysqli_query($con, "UPDATE applicant_credential SET status = '0' WHERE `applicant_id` = '$applicant_id' AND id='$file_id' ");
		if(!$query) { die(mysqli_error($con)); }
		echo 'successfully deleted';
	}

?>
