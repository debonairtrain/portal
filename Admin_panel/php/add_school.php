<?php
include_once('../db_connect/db.php');
	$title=mysqli_real_escape_string($con,$_POST['title']);
	$code=mysqli_real_escape_string($con,$_POST['code']);
	$status=mysqli_real_escape_string($con,$_POST['status']);
	$location=mysqli_real_escape_string($con,$_POST['location']);
	$pn=mysqli_real_escape_string($con,$_POST['pn']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$description=mysqli_real_escape_string($con,$_POST['description']);

	 $q = "INSERT INTO `schools`(`id`, `title`, `code`,`location`,`phone_contacts`, `email`,`real_`, `description`, `school_status`, `date_added`, `added_by`)
			  VALUES (NULL,'$title', '$code','$location' , '$pn', '$email','$status','$description', '1',NOW(),'ghost')";

		$r = mysqli_query($con,$q);

		if($r)
		{
			$result = '1';
		}
		else
		{
			$result =  'School not added due to a system error. We apologize for any inconvenience.';
		}
	echo $result;
	?>
