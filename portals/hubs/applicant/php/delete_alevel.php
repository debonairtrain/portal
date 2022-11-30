<?php
session_start();

include_once('../../../db_connect/db.php');

if(isset($_SESSION['user_id'])){
	$applicant_id=$_SESSION['user_id'];
	$applicant_alevel_id=$_POST['token'];


		$query = mysqli_query($con, "UPDATE applicants_alevel SET applicant_alevel_status = 0 WHERE `applicant_id` = '$applicant_id' and id='$applicant_alevel_id'");
		if(!$query) { die(mysqli_error($con)); }
		 	echo 'Successfully deleted';// redirent after deleting
	}else{
		echo 'Not Successfully deleted';
	}

?>
