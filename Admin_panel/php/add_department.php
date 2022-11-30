<?php
include_once('../db_connect/db.php');
	$school_id=mysqli_real_escape_string($con,$_POST['school_id']);
	$faculty_id=mysqli_real_escape_string($con,$_POST['faculty_id']);
	$title=mysqli_real_escape_string($con,$_POST['title']);
	$code=mysqli_real_escape_string($con,$_POST['code']);
	$status=mysqli_real_escape_string($con,$_POST['status']);
	$location=mysqli_real_escape_string($con,$_POST['location']);
	$pn=mysqli_real_escape_string($con,$_POST['pn']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$description=mysqli_real_escape_string($con,$_POST['description']);

	  $q = "INSERT INTO `departments`(`id`, `school_id`,`faculty_id`,`title`, `code`,`location`,`phone_contacts`, `email`,`real_`, `description`, `department_status`, `date_added`, `added_by`)
			  VALUES (NULL,'$school_id','$faculty_id','$title', '$code','$location' , '$pn', '$email','$status','$description', '1',NOW(),'ghost')";

		$r = mysqli_query($con,$q);

		if($r)
		{
			$result = '1';
		}
		else
		{
			$result =  'Department not added due to a system error. We apologize for any inconvenience.';
		}
	echo $result;
	?>
