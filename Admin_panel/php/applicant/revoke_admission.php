<?php

if(isset ($_GET['xd'] ,  $_GET['id']))

{
include_once('../../../db_connect/db.php');
	$id = $_GET['xd'];
	//echo $id;

	//$query = mysql_query("DELETE FROM `users` WHERE `user_id` = '$id'");
		$query = mysqli_query($con, " UPDATE applicants SET admission_status = '0', qualified = '0' WHERE id='$id'" );
		if(!$query) { die(mysqli_error($con)); }

	header("Location: ../../pages/applicants/view_admitted_applicants_per_course?a=72a5b2626b757f4bba1774ef46db94991ab0f183&pt=1&p=1=Successfully Revoke Admission"); // redirent after deleting

}




?>
